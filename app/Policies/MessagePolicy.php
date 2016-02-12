<?php

namespace Policies;

use Illuminate\Auth\Access\HandlesAuthorization;

use App\User;
use App\Message;

class MessagePolicy
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

    public function update(User $user, Message $message)
    {
        return $user->owns($message);
    }
}
