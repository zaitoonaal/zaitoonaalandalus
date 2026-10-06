<?php

namespace App\Policies;

use App\Models\HeroSection;
use App\Models\User;

class HeroSectionPolicy
{
    public function viewAny(User $user): bool
    {
        return $user->role === 'admin';
    }

    public function view(User $user, HeroSection $heroSection): bool
    {
        return $user->role === 'admin';
    }

    public function create(User $user): bool
    {
        return $user->role === 'admin'
            && ! HeroSection::query()->exists();
    }

    public function update(User $user, HeroSection $heroSection): bool
    {
        return $user->role === 'admin';
    }

    public function delete(User $user, HeroSection $heroSection): bool
    {
        return false;
    }

    public function deleteAny(User $user): bool
    {
        return false;
    }

    public function restore(User $user, HeroSection $heroSection): bool
    {
        return false;
    }

    public function restoreAny(User $user): bool
    {
        return false;
    }

    public function forceDelete(User $user, HeroSection $heroSection): bool
    {
        return false;
    }

    public function forceDeleteAny(User $user): bool
    {
        return false;
    }
}