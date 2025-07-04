<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\LoginUserRequest;
use App\Http\Requests\Api\V1\ApiLoginRequest as V1ApiLoginRequest;
use App\Http\Requests\ApiLoginRequest;
use App\Models\User;
use App\Permissions\V1\Abilities;
use App\Traits\ApiResponses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

   use ApiResponses;

    public function login(LoginUserRequest $request)
    {
      // $request->validate($request->all());

      if(!Auth::attempt($request->only('email','password'))){
        return $this->error('invalid credentials',401);
      }
      $user = User::firstWhere('email',$request->email);

       return $this->ok(
        'Authenticated',
        [
            'token' => $user->createToken('API token for '. $user->email,
           Abilities::getAbilities($user),
            now()->addMonth())->plainTextToken
        ]
        );
    }

   public function register()
   {
    return $this->ok('register');
   }

   public function logout(Request $request)
   {
      $request->user()->currentAccessToken()->delete();
      return $this->ok('');

   }
}
