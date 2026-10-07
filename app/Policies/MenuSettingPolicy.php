<?php

namespace App\Policies;

use App\Models\MenuSetting;
use App\Models\User;

class MenuSettingPolicy
{
    public function viewAny(User $user): bool
    {
        return $user->role === 'admin';
    }

    public function view(User $user, MenuSetting $menuSetting): bool
    {
        return $user->role === 'admin';
    }

    public function create(User $user): bool
    {
        return $user->role === 'admin'
            && ! MenuSetting::query()->exists();
    }

    public function update(User $user, MenuSetting $menuSetting): bool
    {
        return $user->role === 'admin';
    }

    public function delete(User $user, MenuSetting $menuSetting): bool
    {
        return $user->role === 'admin';
    }

    public function deleteAny(User $user): bool
    {
        return $user->role === 'admin';
    }

    public function restore(User $user, MenuSetting $menuSetting): bool
    {
        return false;
    }

    public function restoreAny(User $user): bool
    {
        return false;
    }

    public function forceDelete(User $user, MenuSetting $menuSetting): bool
    {
        return false;
    }

    public function forceDeleteAny(User $user): bool
    {
        return false;
    }
}