<?php

namespace App\Providers;

use App\Models\Post;
use App\Events\PostCreated;
use Illuminate\Support\Facades\Event;
use Illuminate\Auth\Events\Registered;
use App\Listeners\NotifyUserCreatedPost;
use App\Observers\PostCreated as ObserversPostCreated;
use App\Observers\PostCreatedObserver;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],

        PostCreated::class => [
            NotifyUserCreatedPost::class
        ]
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        Post::observe(PostCreatedObserver::class);
    }
}
