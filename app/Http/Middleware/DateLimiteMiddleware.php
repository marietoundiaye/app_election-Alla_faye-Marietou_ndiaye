<?php

namespace App\Http\Middleware;

use Closure;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class DateLimiteMiddleware
{
   
   // public function handle(Request $request, Closure $next): Response
   public function handle(Request $request, Closure $next)
   {
       $dateLimite = Carbon::create(2024, 3, 22); // Date limite : Samedi 22 mars 2024

       if (now()->gt($dateLimite)) {
           return redirect('/message-expire'); // Redirige vers une page d'expiration ou affiche un message
       }

       return $next($request);
   }
}
