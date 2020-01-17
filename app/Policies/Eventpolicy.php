<?php

namespace App\Policies;

use App\Events;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class Eventpolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
    public function update(User $user, events $events)
    {
        return $user->id == $events->user_id;
    }
}
