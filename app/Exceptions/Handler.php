<?php

namespace App\Exceptions;

use App\Traits\ApiResponses;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Validation\ValidationException;
use Throwable;

class Handler extends ExceptionHandler
{
    use ApiResponses;
    /**
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<\Throwable>>
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];
    protected $handlers = [
      ValidationException::class => 'handleValidation',
      ModelNotFoundException::class => 'handelModelNotFound',
      AuthenticationException::class => 'handelAuthentication',
    ];

    private function handleValidation(ValidationException $exception)
    {
         foreach ($exception->errors() as $key => $value)
             foreach ($value as $message)
             {
                $errors[] = [
                 'status' => 422,
                 'message' => $message,
                 'source' => $key
                ];
             }

            return $errors;

    }


    private function handelModelNotFound(ModelNotFoundException $exception)
    {
         return
         [
           [
              'status' => 404,
              'message' => 'The resource cannot be found ',
              'source' => $exception->getModel()
           ]

        ];

    }
    private function handelAuthentication(AuthenticationException $exception)
    {
         return
         [
           [
              'status' => 401,
              'message' => 'Unauthenticated',
              'source' => ''
           ]

        ];

    }

    /**
     * Register the exception handling callbacks for the application.
     */
    public function register(): void
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }
    public function render($request ,Throwable $exception)
    {
        $className = get_class($exception);

        if(array_key_exists($className ,$this->handlers)){
            $method  = $this->handlers[$className];
            return $this->error($this->$method($exception));
        }

        $index = strrpos($className, '\\');

       return $this->error([
         [
            'type' => substr($className,$index+1),
            'status' => 0 ,
            'message' => $exception->getMessage(),
            'source' => 'Line:' . $exception->getLine() . ':' . $exception->getFile()
         ]
       ]);
    }
}
