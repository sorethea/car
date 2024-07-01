<?php

namespace Sorethea\Car\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use Sorethea\Car\Models\Make;
use Sorethea\Core\Models\User;

class MakePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->can('view_any_make');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Make $make): bool
    {
        return $user->can('view_make');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->can('create_make');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Make $make): bool
    {
        return $user->can('update_make');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Make $make): bool
    {
        return $user->can('delete_make');
    }

    /**
     * Determine whether the user can bulk delete.
     */
    public function deleteAny(User $user): bool
    {
        return $user->can('delete_any_make');
    }

    /**
     * Determine whether the user can permanently delete.
     */
    public function forceDelete(User $user, Make $make): bool
    {
        return $user->can('force_delete_make');
    }

    /**
     * Determine whether the user can permanently bulk delete.
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->can('force_delete_any_make');
    }

    /**
     * Determine whether the user can restore.
     */
    public function restore(User $user, Make $make): bool
    {
        return $user->can('restore_make');
    }

    /**
     * Determine whether the user can bulk restore.
     */
    public function restoreAny(User $user): bool
    {
        return $user->can('restore_any_make');
    }

    /**
     * Determine whether the user can replicate.
     */
    public function replicate(User $user, Make $make): bool
    {
        return $user->can('replicate_make');
    }

    /**
     * Determine whether the user can reorder.
     */
    public function reorder(User $user): bool
    {
        return $user->can('reorder_make');
    }
}
