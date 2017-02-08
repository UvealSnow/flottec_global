<?php

namespace App\Policies;

use App\User;
use App\Category;
use Illuminate\Auth\Access\HandlesAuthorization;

class CategoryPolicy {
    use HandlesAuthorization;

    public function edit (User $user) {
        if ($user->type == 'admin') return true;
        return false;
    }

}
