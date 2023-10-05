<?php

namespace App\Http\Middleware;

use Closure;

class RedirectToDomain
{
    public function handle($request, Closure $next)
    {
        // Obtiene el host (nombre de dominio o dirección IP) de la solicitud
        $host = $request->getHost();

        // Verifica si el host es igual a la dirección IP
        if ($host === '104.248.41.148') {
            // Redirige a la URL con el nombre de dominio
            return redirect()->to(config('app.url') . $request->getRequestUri(), 301);
        }

        // Si no es una dirección IP, continúa con la solicitud
        return $next($request);
    }
}
