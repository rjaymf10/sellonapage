<?php

namespace App\Policies;

use App\Product;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProductPolicy
{
    use HandlesAuthorization;

    public function before($user, $ability)
    {
        if ($user->hasRole('admin')) {
            return true;
        }
    }

    /**
     * Determine whether the user can browse models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function browse(User $user)
    {
        return $user->hasRole('seller');
    }

    /**
     * Determine whether the user can read models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function read(User $user, Product $product)
    {
        return $user->shop->id == $product->shop_id;
    }

    /**
     * Determine whether the user can edit models.
     *
     * @param  \App\User  $user
     * @param  \App\Shop  $shop
     * @return mixed
     */
    public function edit(User $user, Product $product)
    {
        return $user->shop->id == $product->shop_id;
    }

    /**
     * Determine whether the user can add models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function add(User $user)
    {
        return $user->hasRole('seller');
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Shop  $shop
     * @return mixed
     */
    public function delete(User $user, Product $product)
    {
        return $user->shop->id == $product->shop_id;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\User  $user
     * @param  \App\Shop  $shop
     * @return mixed
     */
    public function update(User $user, Product $product)
    {
        return $user->shop->id == $product->shop_id;
    }
}
