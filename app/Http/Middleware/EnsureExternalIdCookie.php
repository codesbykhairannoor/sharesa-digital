<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Str;
use Symfony\Component\HttpFoundation\Response;

class EnsureExternalIdCookie
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        // Meta External ID (UUID) for anonymous tracking
        if (!$request->hasCookie('sharesa_external_id')) {
            $externalId = Str::uuid()->toString();
            // Cookie for 30 days
            $response->withCookie(cookie('sharesa_external_id', $externalId, 60 * 24 * 30));
        }

        return $response;
    }
}
