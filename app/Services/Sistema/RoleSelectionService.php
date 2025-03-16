<?php

declare(strict_types=1);

namespace App\Services\Sistema;

use App\Models\Sistema\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class RoleSelectionService
{
    protected Role $roleModel;
    protected RoleService $roleService;
    protected UserService $userService;

    public function __construct()
    {
        $this->roleModel = new Role();
        $this->roleService = new RoleService();
        $this->userService = new UserService();
    }

    public function setActiveRole(?int $roleId): void
    {
        $role = null;
        $user = $this->userService->getByAuth();
        if ($roleId == null) {
            $role = $user->roles[0];
        } else {
            $role = $this->roleModel::find($roleId);
            if (!$user->roles->contains($roleId)) {
                return;
            }
        }

        if (Session::get('active_role')) {
            Session::forget('active_role');
        }

        Session::put('active_role', json_encode($role));


        $this->roleService->loadRoleConfiguration($user, $role);
    }
}
