<?php

namespace App\Http\Controllers\Front\Auth;

use App\User;
use App\Models\Client;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginFormRequest;
use Symfony\Component\HttpFoundation\Request;

class AuthController extends Controller
{
    public function __construct()
    {
    }

    public function login(Request $request)
    {
        
    }

    public function register(Request $request)
    {
    }

    public function update(Request $request, Client $client)
    {
    }

    public function logout()
    {
    }

    public function user(Request $request)
    {
    }
}
