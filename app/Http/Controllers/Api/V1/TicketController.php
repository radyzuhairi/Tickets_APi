<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Filters\V1\TicketFilter;
use App\Http\Requests\Api\V1\ReplaceTicketRequest;
use App\Models\Ticket;
use App\Http\Requests\Api\V1\StoreticketRequest;
use App\Http\Requests\Api\V1\UpdateticketRequest;
use App\Http\Resources\V1\TicketResource;
use App\Models\User;
use App\Policies\V1\TicketPolicy;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Foundation\Exceptions\Handler;

class TicketController extends ApiController
{
  //  public static  $wrap  = 'ticket';
    /**
     * Display a listing of the resource.
     */

     protected $policyClass = TicketPolicy::class;


    public function index(TicketFilter $filters)
    {
        return TicketResource::collection(Ticket::filter($filters)->paginate());
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreticketRequest $request)
    {


         if($this->isAble('store',Ticket::class))
         {
           return new TicketResource(Ticket::create($request->mappedAttributes()));
         }

        return $this->notAuthorized('You are not authorized to update that resource');



    }

    /**
     * Display the specified resource.
     */
    public function show(Ticket $ticket)
    {


          if($this->include('author'))
           {
             return new TicketResource($ticket->load('user'));
           }

        return new TicketResource($ticket);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateticketRequest $request, Ticket $ticket)
    {
      //PATCH

          if( $this->isAble('update',$ticket))
        {
            $ticket->update($request->mappedAttributes());

            return new TicketResource($ticket);

        }
         return $this->notAuthorized('You are not authorized to update that resource');
    }



    public function replace(ReplaceTicketRequest $request, Ticket $ticket)
    {
      //PUT


         if ($this->isAble('replace',$ticket))
         {
            $ticket->update($request->mappedAttributes());

            return new TicketResource($ticket);

         }

        return $this->notAuthorized('You are not authorized to replace that resource');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ticket $ticket)
    {

        if($this->isAble('delete',$ticket))
        {
           $ticket->delete();

           return $this->ok('Ticket successfully deleted');
        }

        return $this->notAuthorized('You are not authorized to delete that resource');

    }
}
