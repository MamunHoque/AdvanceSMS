<?php

namespace App\Listeners;

use Illuminate\Support\Facades\Auth;


class UserEventSubscriber
{
    /**
     * Handle user login events.
     */
    public function onUserLogin($event) {

        $school = Auth::user()->school;

        if(!empty($school)){
            session(['school_id' => $school->id]);
        }

    }

    /**
     * Handle user logout events.
     */
    public function onUserLogout($event) {

        session()->forget('school_id');
    }

    /**
     * Register the listeners for the subscriber.
     *
     * @param  Illuminate\Events\Dispatcher  $events
     */
    public function subscribe($events)
    {
        $events->listen(
            'Illuminate\Auth\Events\Login',
            'App\Listeners\UserEventSubscriber@onUserLogin'
        );

        $events->listen(
            'Illuminate\Auth\Events\Logout',
            'App\Listeners\UserEventSubscriber@onUserLogout'
        );
    }

}