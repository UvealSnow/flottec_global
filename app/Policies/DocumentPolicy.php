<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class DocumentPolicy {
    use HandlesAuthorization;

    public function destroy (User $user) {
        if ($user->type == 'admin') return true;
        return false;
    }
}
