<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, ...$roles)
    {
        if (!Auth::check()) {
            return redirect('/login'); // redirect to login if not authenticated
        }

        $user = Auth::user();

        // Check if the user's role is in the list of allowed roles
        if (!in_array($user->role, $roles)) {
            abort(403, 'Unauthorized action.'); // return 403 if user role is not allowed
        }

        return $next($request);
    }
}