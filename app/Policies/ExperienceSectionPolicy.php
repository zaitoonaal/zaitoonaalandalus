<?php

namespace App\Policies;

use App\Models\ExperienceSection;
use App\Models\User;

class ExperienceSectionPolicy
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
        ExperienceSection $experienceSection
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
        ExperienceSection $experienceSection
    ): bool {
        return $this->isAdmin(
            $user
        );
    }


    public function delete(
        User $user,
        ExperienceSection $experienceSection
    ): bool {
        return $this->isAdmin(
            $user
        );
    }


    public function restore(
        User $user,
        ExperienceSection $experienceSection
    ): bool {
        return false;
    }


    public function forceDelete(
        User $user,
        ExperienceSection $experienceSection
    ): bool {
        return false;
    }
}