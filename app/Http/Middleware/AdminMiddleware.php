<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next)
    {
        if (!session('admin_logged_in')) {
            return redirect()->route('admin.login')->with('error', 'Vui lòng đăng nhập tài khoản Admin để truy cập quản trị!');
        }

        return $next($request);
    }
}
