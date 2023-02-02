<?php

declare(strict_types=1);

namespace App\Policies;

use App\Models\Category;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class CategoryPolicy
{
    use HandlesAuthorization;

    public function update(User $user, Category $category): Response
    {
        return $user->id === $category->user_id
            ? Response::allow()
            : Response::deny('You do not own this category.');
    }

    public function delete(User $user, Category $category): Response
    {
        return $user->id === $category->user_id
            ? Response::allow()
            : Response::deny('You do not own this category.');
    }
}
