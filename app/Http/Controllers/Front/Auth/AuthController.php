<?php

namespace App\Http\Controllers\Front\Auth;

use App\Models\User;
use App\Models\Client;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginFormRequest;
use Symfony\Component\HttpFoundation\Request;
use Tymon\JWTAuth\Facades\JWTAuth;

class AuthController extends Controller
{
    protected $auth;

    public function __construct(JWTAuth $auth)
    {
        $this->auth = $auth;
    }

    public function login(Request $request)
    {
        try {
            if (!$token = $this->auth->attempt($request->only('email', 'password'))) {
                return response()->json([
                    'errors' => [
                        'root' => 'Could not sign you in with those details'
                    ]
                ], 401);
            }
        } catch (JWTException $e) {
            return response()->json([
                'errors' => [
                    'root' => 'Failed'
                ]
            ], $e->getStatusCode());
        }
        return response()->json([
            'data' => $request->user(),
            'meta' => [
                'token' => $token
            ]
        ], 200);
    }

    public function update(Request $request, Client $client)
    {
        $client->phone = '+998' . $request->mobile;
        $client->save();
        $client->update($request->only('name', 'sex', 'last_name', 'region_id', 'date_birth'));
        return response($client);
    }

    public function logout()
    {
        JWTAuth::invalidate(JWTAuth::getToken());
        return response(null, 200);
    }

    public function user(Request $request)
    {
        // $authuser = JWTAuth::toUser(JWTAuth::getToken());

        return response()->json([
            'data' => $request->authuser
        ]);
    }
}
