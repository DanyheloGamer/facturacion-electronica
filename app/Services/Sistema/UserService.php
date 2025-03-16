<?php

declare(strict_types=1);

namespace App\Services\Sistema;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserService
{
    protected User $userModel;
    public function __construct()
    {
        $this->userModel = new User();
    }

    /**
     * @return object|null
     */
    public function getByAuth(): ?object
    {

        return $this->userModel
            ->with(['roles' => function ($query) {
                $query->select('roles.id', 'roles.name', 'roles.slug');
            }])
            ->where('users.id', Auth::user()->id)
            ->first()
        ;
    }
}