<?php

namespace App\Http\Middleware;

use Closure;
use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\Exceptions\TokenExpiredException;

class JWTGenerate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $token = JWTAuth::getToken();
        try {
            $user = JWTAuth::authenticate($token);
            $authuser = JWTAuth::toUser(JWTAuth::getToken());
            $request->merge(compact('authuser'));
            return $next($request);

        } catch (TokenExpiredException $e) {
            try {
                $token = JWTAuth::refresh($token); // might fail
                JWTAuth::setToken($token);
                $user = JWTAuth::authenticate($token);
                $authuser = JWTAuth::toUser(JWTAuth::getToken());
                $request->merge(compact('authuser'));

                return $next($request);

            } catch (TokenExpiredException $e) {
        //  token cannot be refreshed, user needs to login again
                throw new HttpResponseException(
                    Response::json(['msg' => "Need to Login Again"])
                );
            }
        }
        if ($authuser = JWTAuth::toUser(JWTAuth::getToken())) {
            $request->merge(compact('authuser'));
            return $next($request);
        }
        abort(404);
    }
}
