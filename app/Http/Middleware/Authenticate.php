<?php

namespace App\Http\Middleware;

use Closure;

define('USERNAME','rodgers');
define('PASSWORD','password');

class Authenticate
{
    public function handle($request, Closure $next){

        if($request->header('PHP_AUTH_USER') == USERNAME && $request->header('PHP_AUTH_PW') == PASSWORD){

            return $next($request);

        }
        else{
            $content = array();
            $content['error'] = 'Unauthorized request';
            return response()->json($content, 401);
        }
    }
}