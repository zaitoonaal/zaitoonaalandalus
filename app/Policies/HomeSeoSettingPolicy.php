<?php

namespace App\Policies;

use App\Models\HomeSeoSetting;
use App\Models\User;

class HomeSeoSettingPolicy
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
        HomeSeoSetting $homeSeoSetting
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
        HomeSeoSetting $homeSeoSetting
    ): bool {
        return $this->isAdmin(
            $user
        );
    }


    public function delete(
        User $user,
        HomeSeoSetting $homeSeoSetting
    ): bool {
        return false;
    }


    public function restore(
        User $user,
        HomeSeoSetting $homeSeoSetting
    ): bool {
        return false;
    }


    public function forceDelete(
        User $user,
        HomeSeoSetting $homeSeoSetting
    ): bool {
        return false;
    }
}