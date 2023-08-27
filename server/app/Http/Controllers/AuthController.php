<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Traits\HttpResponses;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\LoginUserRequest;
use App\Http\Requests\StoreUserRequest;
use Illuminate\Support\Facades\Cookie;

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

        $user= Auth::user();
        $token = $user->createToken('Token')->plainTextToken;
        $cookie = cookie('token',$token,60*24);

        return response([
            'user'=>$user,
            'Token'=>$token
        ])->withCookie($cookie);
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
            'user'=>$user
        ]);

        
    }

    public function logout()
    {
        return response()->json('this is my logout method');
    }
}
