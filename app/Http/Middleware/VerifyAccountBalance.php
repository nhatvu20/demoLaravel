<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VerifyAccountBalance
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
        if (Auth::check()) {
            // Người dùng đã đăng nhập
            return $next($request);
        } else {
            // Người dùng chưa đăng nhập, chuyển hướng tới trang đăng nhập
            return response()->json([
                'message' => 'chưa đăng nhập'
            ], 500);
            // return redirect()->route('login');
        }
    }
}
