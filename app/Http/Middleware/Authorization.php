<?php

namespace App\Http\Middleware;

use Closure;

class Authorization
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $roles = null)
    {
        /**
         * Reject Unauthenticated Users
         */
        if (auth()->guest()) {
            if ($request->ajax()) {
                return response('Unauthorized.', 401);
            } else {
                return redirect()->guest('auth/login');
            }
        }


        $roles = explode('|', trim($roles));
        /**
         * Admin Users are free to do whatever they like.
         */
        if (auth()->user()->hasRole('admin')) {
            return $next($request);
        }

        /**
         * If an array of roles is passed we check each one of them
         */
        foreach ($roles as $key => $role) {
            if (auth()->user()->hasRole($role)) {
                return $next($request);
            }
        }

        /**
         * Reject, Unauthorized
         */
        return redirect()->back()
            ->withDanger("Sorry, you are not authorized to view this page! Contact Admin for this.");
        
                

    }

}
