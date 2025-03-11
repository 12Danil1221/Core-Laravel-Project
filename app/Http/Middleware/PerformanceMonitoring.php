<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;

class PerformanceMonitoring
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $start = microtime(true);
        $response = $next($request);
    
        $duration = microtime(true) - $start;
        if ($duration > 1) { // более 1 секунды
         Log::warning('Медленный маршрут: ' . $request->path());
         Log::warning('Время выполнения: ' . $duration . ' секунд');
     }
    
     return $response;
    }
}