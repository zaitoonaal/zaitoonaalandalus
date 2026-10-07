<?php

namespace App\Policies;

use App\Models\InstagramSection;
use App\Models\User;

class InstagramSectionPolicy
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
        InstagramSection $instagramSection
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
        InstagramSection $instagramSection
    ): bool {
        return $this->isAdmin(
            $user
        );
    }


    public function delete(
        User $user,
        InstagramSection $instagramSection
    ): bool {
        return $this->isAdmin(
            $user
        );
    }


    public function restore(
        User $user,
        InstagramSection $instagramSection
    ): bool {
        return false;
    }


    public function forceDelete(
        User $user,
        InstagramSection $instagramSection
    ): bool {
        return false;
    }
}