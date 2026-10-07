<?php

namespace App\Policies;

use App\Models\HomepageSeoSetting;
use App\Models\User;

class HomepageSeoSettingPolicy
{
    private function isAdmin(
        User $user
    ): bool {
        return $user->role === 'admin';
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
        HomepageSeoSetting $homepageSeoSetting
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
        HomepageSeoSetting $homepageSeoSetting
    ): bool {
        return $this->isAdmin(
            $user
        );
    }


    public function delete(
        User $user,
        HomepageSeoSetting $homepageSeoSetting
    ): bool {
        return $this->isAdmin(
            $user
        );
    }


    public function deleteAny(
        User $user
    ): bool {
        return $this->isAdmin(
            $user
        );
    }


    public function restore(
        User $user,
        HomepageSeoSetting $homepageSeoSetting
    ): bool {
        return false;
    }


    public function forceDelete(
        User $user,
        HomepageSeoSetting $homepageSeoSetting
    ): bool {
        return false;
    }
}