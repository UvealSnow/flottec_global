<?php

namespace App\Policies;

use App\User;
use App\Pending;
use Illuminate\Auth\Access\HandlesAuthorization;

class PendingPolicy {
    use HandlesAuthorization;

    public function edit (User $user) {
        if ($user->type == 'admin') return true;
        return false;
    }

}
