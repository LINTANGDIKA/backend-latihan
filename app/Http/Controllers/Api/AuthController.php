<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:4'
        ]);
        $data['password'] = Hash::make($data['password']);
        $user = User::create($data);
        $token = $user->createToken('registertoken')->plainTextToken;
        $response = [
            'messages' => 'Register Berhasil !',
            'user' => $user,
            'token' => $token
        ];
        return response($response, 201);
    }
    public function login(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);
        $checkEmail = User::where('email', $data['email'])->first();
        $checkPassword = Hash::check($data['password'], $checkEmail->password);
        $token = $checkEmail->createToken('logintoken')->plainTextToken;
        if (!$checkEmail || !$checkPassword) {
            $response = [
                'messages' => ' Password Anda Salah atau Email Anda Ga Ada Gan!'
            ];

            return response($response, 404);
        } else {
            $response = [
                'messages' => 'Anda Berhasil Login!',
                'token' => $token
            ];

            return response($response, 201);
        }
    }
    public function logout(Request $request)
    {
        $request->user()->tokens()->delete();
        return [
            'message' => 'Logged out',
            'token' => $request->user()->tokens()
        ];
    }
}
