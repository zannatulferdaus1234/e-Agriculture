<?php

namespace App\Events;

use App\Models\EndUser;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class UserRegistered
{
    use Dispatchable, SerializesModels;

    public $enduser;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(EndUser $enduser)
    {
        $this->enduser = $enduser;
    }

}
