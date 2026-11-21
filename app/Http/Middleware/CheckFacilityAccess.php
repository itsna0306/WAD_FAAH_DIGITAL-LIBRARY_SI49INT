<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckFacilityAccess
{
    public function handle(Request $request, Closure $next): Response
    {
        if (!config('services.facility_access_enabled', true)) {
            abort(403, 'Facility access is currently disabled.');
        }

        return $next($request);
    }
}
