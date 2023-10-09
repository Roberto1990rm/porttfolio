<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Middleware\App;
use App\Http\Controllers\PublicController;
use App\Http\Controllers;


class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $locale = session('locale', 'en');

        app()->setLocale($locale); // Usar app() para obtener la instancia de la aplicación

        return $next($request);
    }
}
