<?php

namespace App\Policies;

use App\Models\ContactPageSetting;
use App\Models\User;

class ContactPageSettingPolicy
{
    public function viewAny(
        User $user
    ): bool {
        return $user->role === 'admin';
    }

    public function view(
        User $user,
        ContactPageSetting $contactPageSetting
    ): bool {
        return $user->role === 'admin';
    }

    public function create(
        User $user
    ): bool {
        return $user->role === 'admin'
            && ! ContactPageSetting::query()->exists();
    }

    public function update(
        User $user,
        ContactPageSetting $contactPageSetting
    ): bool {
        return $user->role === 'admin';
    }

    public function delete(
        User $user,
        ContactPageSetting $contactPageSetting
    ): bool {
        return $user->role === 'admin';
    }

    public function deleteAny(
        User $user
    ): bool {
        return $user->role === 'admin';
    }

    public function restore(
        User $user,
        ContactPageSetting $contactPageSetting
    ): bool {
        return false;
    }

    public function restoreAny(
        User $user
    ): bool {
        return false;
    }

    public function forceDelete(
        User $user,
        ContactPageSetting $contactPageSetting
    ): bool {
        return false;
    }

    public function forceDeleteAny(
        User $user
    ): bool {
        return false;
    }
}