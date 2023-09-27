<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckEmail
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $so = $request->so;
        if ($so % 2 == 0) {
            // Số là chẵn
            echo "Số là chẵn";
        return $next($request);
        } else {
            // Số là lẻ
            echo "Số là lẻ";
           
        }

}
}
