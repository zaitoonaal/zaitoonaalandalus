<?php

namespace App\Policies;

use App\Models\ShishaShowcaseSetting;
use App\Models\User;

class ShishaShowcaseSettingPolicy
{
    private function isAdmin(
        User $user
    ): bool {
        return $user->is_active
            && $user->role === 'admin';
    }


    public function viewAny(
        User $user
    ): bool {
        return $this->isAdmin(
            $user
        );
    }


    public function view(
        User $user,
        ShishaShowcaseSetting $shishaShowcaseSetting
    ): bool {
        return $this->isAdmin(
            $user
        );
    }


    public function create(
        User $user
    ): bool {
        return $this->isAdmin(
            $user
        );
    }


    public function update(
        User $user,
        ShishaShowcaseSetting $shishaShowcaseSetting
    ): bool {
        return $this->isAdmin(
            $user
        );
    }


    public function delete(
        User $user,
        ShishaShowcaseSetting $shishaShowcaseSetting
    ): bool {
        return $this->isAdmin(
            $user
        );
    }


    public function restore(
        User $user,
        ShishaShowcaseSetting $shishaShowcaseSetting
    ): bool {
        return false;
    }


    public function forceDelete(
        User $user,
        ShishaShowcaseSetting $shishaShowcaseSetting
    ): bool {
        return false;
    }
}