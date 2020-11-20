<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class UserEditOwnPost
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if ($request->post->owner_id !== auth()->user()->id) {
            return response()->redirectTo($request->post->path())->with('status', 'Post is not yours to edit!');
        }
        return $next($request);
    }
}
