<?php

namespace App\Policies;

use App\Models\Listing;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class ListingPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user)
    {
        return $user->role_id = 1; 
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Listing $listing)
    {
        return $user->role_id = 1 || (auth()->check() && $listing->user_id == auth()->id()); 
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user)
    {
        return $user->role_id == 1 || $user->role_id == 2;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Listing $listing)
    {
        return $user->role_id = 1 || (auth()->check() && $listing->user_id == auth()->id());
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Listing $listing)
    {
        return $user->role_id = 1 || (auth()->check() && $listing->user_id == auth()->id());
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Listing $listing)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Listing $listing): bool
    {
        //
    }
}