<?php

namespace App\Policies;

use App\User;
use App\Policy;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProductPolicy
{
    use HandlesAuthorization;

    public function update(User $user) {
        if ($user->type == 'admin') return true;
        return false;
    }
}
