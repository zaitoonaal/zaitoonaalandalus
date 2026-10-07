<?php

namespace App\Policies;

use App\Models\BlogPost;
use App\Models\User;

class BlogPostPolicy
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
        BlogPost $blogPost
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
        BlogPost $blogPost
    ): bool {
        return $this->isAdmin(
            $user
        );
    }


    public function delete(
        User $user,
        BlogPost $blogPost
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
        BlogPost $blogPost
    ): bool {
        return false;
    }


    public function forceDelete(
        User $user,
        BlogPost $blogPost
    ): bool {
        return false;
    }
}