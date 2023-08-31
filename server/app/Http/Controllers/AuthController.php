<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Traits\HttpResponses;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\LoginUserRequest;
use App\Http\Requests\StoreUserRequest;

class AuthController extends Controller
{
    use HttpResponses;
    public function login(LoginUserRequest $request)
    {
        $request->validated($request->all);
        if(!Auth::attempt($request->only(['email','password'])))
        {
            return $this->error('','Credentials do not match',401);
        }
        $user= User::Where('email',$request->email)->first();
        return $this->success([
            'user'=>$user,
            'Token'=>$user->createToken('API Token Of '. $user->name )->plainTextToken
        ]);
    }

    public function register(StoreUserRequest $request)
    {
        $request->validated($request->all());
        $user = User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
        ]);
        
        return  $this->success([
            'user'=>$user,
            'token'=>$user->createToken('API Token Of '. $user->name)->plainTextToken
        ]);

        
    }

    public function logout()
    {
        return response()->json('this is my logout method');
    }
}
