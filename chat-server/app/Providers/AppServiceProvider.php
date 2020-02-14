<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Observers\ChatMessageObserver;
use App\ChatMessage;

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
        ChatMessage::observe(ChatMessageObserver::class);
    }
}
