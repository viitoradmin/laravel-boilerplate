<?php

namespace App\Providers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        //when user login add activity log
        // Event::listen(\Illuminate\Auth\Events\Login::class, function ($event) {
        //     activity('auth')
        //     ->causedBy($event->user->id)
        //     ->performedOn($event->user)
        //     ->event('login')
        //     ->log('login');
        // });

        //when user logout add activity log
        // Event::listen(\Illuminate\Auth\Events\Logout::class, function ($event) {
        //     activity('auth')
        //     ->causedBy($event->user->id)
        //     ->performedOn($event->user)
        //     ->event('logout')
        //     ->log('logout');
        // });
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     *
     * @return bool
     */
    public function shouldDiscoverEvents()
    {
        return false;
    }
}
