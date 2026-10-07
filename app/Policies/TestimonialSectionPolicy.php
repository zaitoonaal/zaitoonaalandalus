<?php

namespace App\Policies;

use App\Models\TestimonialSection;
use App\Models\User;

class TestimonialSectionPolicy
{
    private function isAdmin(
        User $user
    ): bool {
        return $user->is_active
            &&
            $user->role === 'admin';
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
        TestimonialSection $testimonialSection
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
        TestimonialSection $testimonialSection
    ): bool {
        return $this->isAdmin(
            $user
        );
    }


    public function delete(
        User $user,
        TestimonialSection $testimonialSection
    ): bool {
        return $this->isAdmin(
            $user
        );
    }


    public function restore(
        User $user,
        TestimonialSection $testimonialSection
    ): bool {
        return false;
    }


    public function forceDelete(
        User $user,
        TestimonialSection $testimonialSection
    ): bool {
        return false;
    }
}