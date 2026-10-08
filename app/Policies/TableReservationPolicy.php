<?php

namespace App\Policies;

use App\Models\TableReservation;
use App\Models\User;

class TableReservationPolicy
{
    /*
    |--------------------------------------------------------------------------
    | Reservation Access
    |--------------------------------------------------------------------------
    |
    | Only ACTIVE users with either:
    |
    | - admin
    | - employee
    |
    | can access Table Reservations.
    |
    */

    private function canManage(
        User $user
    ): bool {
        return (bool) $user->is_active
            && in_array(
                $user->role,
                [
                    'admin',
                    'employee',
                ],
                true
            );
    }


    /*
    |--------------------------------------------------------------------------
    | View Reservation List
    |--------------------------------------------------------------------------
    */

    public function viewAny(
        User $user
    ): bool {
        return $this->canManage(
            $user
        );
    }


    /*
    |--------------------------------------------------------------------------
    | View Single Reservation
    |--------------------------------------------------------------------------
    */

    public function view(
        User $user,
        TableReservation $tableReservation
    ): bool {
        return $this->canManage(
            $user
        );
    }


    /*
    |--------------------------------------------------------------------------
    | Create Reservation From Admin
    |--------------------------------------------------------------------------
    */

    public function create(
        User $user
    ): bool {
        return $this->canManage(
            $user
        );
    }


    /*
    |--------------------------------------------------------------------------
    | Update Reservation
    |--------------------------------------------------------------------------
    */

    public function update(
        User $user,
        TableReservation $tableReservation
    ): bool {
        return $this->canManage(
            $user
        );
    }


    /*
    |--------------------------------------------------------------------------
    | Delete Reservation
    |--------------------------------------------------------------------------
    */

    public function delete(
        User $user,
        TableReservation $tableReservation
    ): bool {
        return $this->canManage(
            $user
        );
    }


    /*
    |--------------------------------------------------------------------------
    | Bulk Delete
    |--------------------------------------------------------------------------
    */

    public function deleteAny(
        User $user
    ): bool {
        return $this->canManage(
            $user
        );
    }


    /*
    |--------------------------------------------------------------------------
    | Restore
    |--------------------------------------------------------------------------
    */

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


    /*
    |--------------------------------------------------------------------------
    | Force Delete
    |--------------------------------------------------------------------------
    */

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