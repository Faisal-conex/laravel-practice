<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class checkAdmin
{



    /**
     * Handle an incoming request.
     *b
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if($request->admin && $request->admin == 'false'){
            return redirect("noaccess");
        }
        return $next($request);
    }
    
}
