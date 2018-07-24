<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Post;
use DB;
use View;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $post = DB::table('post')->skip(0)->take(5)->get();
        View::share('post_aside', $post);
        
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
