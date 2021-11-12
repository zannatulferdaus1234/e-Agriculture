<?php

namespace App\Listeners;

use App\Events\UserRegistered;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendWelcomeEmail
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  UserRegistered  $event
     * @return void
     */
    public function handle(UserRegistered $event)
    {
        $data = array('name' => $event->enduser->name, 'email' => $event->enduser->email, 'body' => 'Welcome to our website. Hope you will enjoy our articles');

        Mail::send('emails.welcome_mail', $data, function($message) use ($data) {
            $message->to($data['email'])
                    ->subject('Welcome to our Website');
            $message->from('eAgriculture@artisansweb.net');
        });

    }
}
