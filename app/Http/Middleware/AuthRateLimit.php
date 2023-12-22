<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Cache\RateLimiter;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AuthRateLimit
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    protected $limiter;
    public function __construct(RateLimiter $limiter)
    {
        $this->limiter = $limiter;
    }
    public function handle($request, Closure $next)
    {
        $key = $request->ip(); 
        $limit = 2; 
        $decayInSeconds = 10; 

        if ($this->limiter->tooManyAttempts($key, $limit)) {
            return response()->json(['message' => 'Too Many Attempts. Try Again Later.'], Response::HTTP_TOO_MANY_REQUESTS);
        }

        $this->limiter->hit($key, $decayInSeconds);

        return $next($request);
    }
}
