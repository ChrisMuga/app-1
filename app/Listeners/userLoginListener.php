<?php

namespace App\Listeners;

use App\Events\userLogin;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class userLoginListener
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
     * @param  userLogin  $event
     * @return void
     */
    public function handle(userLogin $event)
    {
        //
    }
}
