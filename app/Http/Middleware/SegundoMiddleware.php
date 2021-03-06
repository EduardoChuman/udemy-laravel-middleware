<?php

namespace App\Http\Middleware;

use Closure;
use Log;

class SegundoMiddleware
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
        Log::debug('|| Antes');
        // return response('não foi desta vez.');
        $response = $next($request);
        Log::debug('|| Depois');
        return $response;
    }
}
