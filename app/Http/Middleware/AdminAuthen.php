<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminAuthen
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    // request la yeu cau gui qua
    // closure la noi trung gian luu tru request + muc dich va de di toi muc dich
    public function handle(Request $request, Closure $next)
    {
        // neu da login thanh cong thi cho di qua va hien thong bao
        if(auth('admin')->check())
            return $next($request);
        return redirect()->route('admin.login')->with(['type'=>'info','msg'=>'Vui lòng đăng nhập để sử dụng','title'=>'Đăng nhập']);

    }
}
