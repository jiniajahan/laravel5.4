<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Task;
use App\Tag;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('task.archives', function($view){
//            $view->with('archives', Task::archives());
            $view->with('tags', \App\Tag::has('tasks')->pluck('name'));

        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

    }
}
