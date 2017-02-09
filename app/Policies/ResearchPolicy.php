<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ResearchPolicy {
    use HandlesAuthorization;

    public function edit (User $user) {
        if ($user->type = 'admin') return true;
        return false;
    }

}
