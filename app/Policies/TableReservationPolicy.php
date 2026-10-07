<?php

namespace App\Policies;

use App\Models\TableReservation;
use App\Models\User;

class TableReservationPolicy
{
    private function canManage(
        User $user
    ): bool {
        return $user->is_active
            && in_array(
                $user->role,
                [
                    'admin',
                    'employee',
                ],
                true
            );
    }


    public function viewAny(
        User $user
    ): bool {
        return $this->canManage(
            $user
        );
    }


    public function view(
        User $user,
        TableReservation $tableReservation
    ): bool {
        return $this->canManage(
            $user
        );
    }


    public function create(
        User $user
    ): bool {
        return $this->canManage(
            $user
        );
    }


    public function update(
        User $user,
        TableReservation $tableReservation
    ): bool {
        return $this->canManage(
            $user
        );
    }


    public function delete(
        User $user,
        TableReservation $tableReservation
    ): bool {
        return $this->canManage(
            $user
        );
    }


    public function deleteAny(
        User $user
    ): bool {
        return $this->canManage(
            $user
        );
    }


    public function restore(
        User $user,
        TableReservation $tableReservation
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
        TableReservation $tableReservation
    ): bool {
        return false;
    }


    public function forceDeleteAny(
        User $user
    ): bool {
        return false;
    }
}