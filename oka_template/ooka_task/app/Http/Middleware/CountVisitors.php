<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;
use Cache;
use Session;

class CountVisitors
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // Get the IP address of the visitor
        $ip = $request->ip();

        // Check if user is logged in
        if (Auth::check()) {
            // Check if visitor has not been counted before
            if (!Cache::has('logged_in_visitor_' . $ip)) {
                // Reduce non-logged in visitors if visitor has been counted before
                if (Cache::has('non_logged_in_visitor_' . $ip)) {
                    Cache::decrement('total_non_logged_in_visitors', 1);
                }
                // Count logged in visitors
                Cache::add('logged_in_visitor_' . $ip, true, 30);
                Cache::increment('total_logged_in_visitors', 1);
                Cache::add('non_logged_in_visitor_' . $ip, true, 30);
            }
        } else {
            // Check if visitor has not been counted before and not logged out
            if (!Cache::has('non_logged_in_visitor_' . $ip)) {
                // Count non-logged in visitors
                Cache::add('non_logged_in_visitor_' . $ip, true, 30);
                Cache::increment('total_non_logged_in_visitors', 1);
            }
        }

        return $next($request);
    }
}
