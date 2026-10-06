<?php

namespace App\Policies;

use App\Models\GallerySetting;
use App\Models\User;

class GallerySettingPolicy
{
    public function viewAny(User $user): bool
    {
        return $user->role === 'admin';
    }

    public function view(User $user, GallerySetting $gallerySetting): bool
    {
        return $user->role === 'admin';
    }

    public function create(User $user): bool
    {
        return $user->role === 'admin'
            && ! GallerySetting::query()->exists();
    }

    public function update(User $user, GallerySetting $gallerySetting): bool
    {
        return $user->role === 'admin';
    }

    public function delete(User $user, GallerySetting $gallerySetting): bool
    {
        return $user->role === 'admin';
    }

    public function deleteAny(User $user): bool
    {
        return $user->role === 'admin';
    }

    public function restore(User $user, GallerySetting $gallerySetting): bool
    {
        return false;
    }

    public function restoreAny(User $user): bool
    {
        return false;
    }

    public function forceDelete(User $user, GallerySetting $gallerySetting): bool
    {
        return false;
    }

    public function forceDeleteAny(User $user): bool
    {
        return false;
    }
}