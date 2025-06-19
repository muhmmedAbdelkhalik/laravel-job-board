<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;

class AuthController extends Controller
{
    public function login(LoginRequest $request)
    {
        $credentials = $request->only('email', 'password');
        $token = auth('api')->attempt($credentials);
        if (!$token) {
            return response()->json(['message' => 'Unauthorized'], 401);
        }
        return response()->json([
            'token' => $token,
            'expires_in' => auth('api')->factory()->getTTL() * 60,

        ]);

    }

    public function logout()
    {
        auth('api')->logout();
        return response()->json(['message' => 'Successfully logged out']);
    }

    public function refresh()
    {
        $refreshToken = auth('api')->refresh();
        return response()->json([
            'token' => $refreshToken,
            'expires_in' => auth('api')->factory()->getTTL() * 60,
        ]);
    }

    public function me()
    {
        $user = auth('api')->user();
        return response()->json($user);
    }
}
