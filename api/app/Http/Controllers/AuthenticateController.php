<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;


class AuthenticateController extends Controller
{

    public function __construct()
    {
        $this->middleware('jwt.auth', ['except' => ['authenticate']]);
    }
    public function index()
    {
    // TODO: show users
    }

    public function authenticate(Request $request)
    {

        $credentials = $request->only('email', 'password');
        try {

            if (! $token = JWTAuth::attempt($credentials)) {

            return response()->json(['error' => 'invalid_credentials']);
        }
        } catch (JWTException $e) {

            return response()->json(['error' => 'could_not_create_token']);
        }

        return response()->json(compact('token'));
    }
}