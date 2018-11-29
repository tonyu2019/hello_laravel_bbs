<?php

namespace App\Providers;

use App\Models\Post;
use App\Models\Reply;
use App\Observers\PostObserver;
use App\Observers\ReplyObserver;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        //本地中文化
        \Carbon\Carbon::setLocale('zh');
        //监听post模型事件
        Post::observe(PostObserver::class);
        //监听Reply模型事件
        Reply::observe(ReplyObserver::class);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if (app()->isLocal()){
            $this->app->register(\VIACreative\SudoSu\ServiceProvider::class);
        }
    }
}
