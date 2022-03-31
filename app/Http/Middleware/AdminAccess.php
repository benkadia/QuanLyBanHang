<?php

namespace App\Http\Middleware;

use App\Models\Feature;
use Closure;
use Illuminate\Http\Request;

class AdminAccess
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
        $id = auth('admin')->id();
        if(Feature::check($id,$request->route()->getName()))
            return $next($request);
        return redirect()->route('admin.403')->with(['type'=>'info','msg'=>'Vui lòng đăng nhập để sử dụng','title'=>'Đăng nhập']);

    }
}
