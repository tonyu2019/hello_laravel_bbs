<?php

namespace App\Providers;

use App\Models\Post;
use App\Models\Reply;
use App\Models\User;
use App\Observers\PostObserver;
use App\Observers\ReplyObserver;
use App\Observers\RoleObserver;
use App\Observers\UserObservers;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Spatie\Permission\Models\Role;

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
        //监听User模型
        User::observe(UserObservers::class);
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
