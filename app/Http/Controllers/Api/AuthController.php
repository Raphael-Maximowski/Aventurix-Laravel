<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\RequestUser;
use App\Http\Requests\LoginUser;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(RequestUser $request)
    {
        $data = $request->validated();

        $user = User::create([
            'name' => request('name'),
            'email' => request('email'),
            'password' => request('password'),
        ]);

        $token = $user->createToken('auth_token')->plainTextToken;
        return response()->json([
            'data' => $user,
            'acces_token' => $token,
            'token_type' => 'Bearer',
        ]);
    }

    public function login(LoginUser $request)
    {
        $data = $request->validated();

        $credentials = $request->all();
        if (!Auth::attempt($credentials)){
            return response()->json(['mesage' => 'User Not Found'], 401);
        }

        $user = User::where('email', $request->email)->firstOrFail();
        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'message'       => 'Login success',
            'access_token'  => $token,
            'token_type'    => 'Bearer'
        ]);
    }
}
