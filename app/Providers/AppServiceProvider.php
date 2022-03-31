<?php

namespace App\Providers;

use App\Models\Feature;
use App\Models\Config;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Khai báo biến configs toàn cục
        $configs = Config::getList();
        view::composer('*', function ($view) use($configs){
            // Khai báo biến menu để trả về các chức năng được sử dụng theo user đang login
            $menus  = [];
            if(auth('admin')->check())
            {
                $menus = collect(Feature::listForUser(auth('admin')->id()));
            }
            $view->with('menus',$menus);
            $view->with('configs',$configs);
        });
        Paginator::useBootstrap();
    }
}
