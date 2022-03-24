<?php
namespace Wyj\Avatar;

use Illuminate\Support\ServiceProvider;

class AvatarProvider extends ServiceProvider 
{

    public function boot()
    {
        // 发布配置文件
        $this->publishes([
            __DIR__.'/config/avatar.php' => config_path('avatar.php'),
        ]);
    }

    public function register()
    {
        $this->app->singleton('avatar', function ($app) {
            return new Avatar($app['config']);
        });
    }

}

