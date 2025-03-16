<?php

declare(strict_types=1);

namespace App\Services\Sistema;

use App\Builders\Sistema\ModuloBuilder;
use App\Models\Sistema\Role;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Session;

class RoleService
{
    private Role $roleModel;
    private ModuloService $moduloService;

    public function __construct()
    {
        $this->roleModel = new Role();
        $this->moduloService = new ModuloService();
    }

    /**
     * Carga la configuración y permisos para el rol seleccionado.
     */
    public function loadRoleConfiguration(User $user, Role $role): void
    {
        // Cargar los permisos asociados al rol
        $permissions = $this->getRolePermissions($role);

        // Guardar permisos en caché para acceso rápido durante la sesión
        $cacheKey = "user_{$user->id}_permisos";
        Cache::put($cacheKey, $permissions, now()->addHours(12));

        // Cargar configuraciones específicas del rol (UI, menús, etc.)
        $configurations = $this->getRoleConfigurations($role, $user);

        if (Session::has('role_config')) {
            Session::forget('role_config');
        }
        // Guardar configuraciones en la sesión
        Session::put('role_config', json_encode($configurations));
    }

    /**
     * Obtiene los permisos asociados al rol.
     */
    private function getRolePermissions(Role $role): array
    {
        // Obtener permisos directos del rol
        $directPermissions = $role->permisos->pluck('slug')->toArray();

        // Obtener permisos heredados (si es aplicable)
        $inheritedPermissions = $this->getInheritedPermissions($role);

        return array_unique(array_merge($directPermissions, $inheritedPermissions));
    }

    /**
     * Obtiene los permisos heredados de roles superiores (si aplica).
     */
    private function getInheritedPermissions(Role $role): array
    {
        // Implementar lógica de herencia de permisos si se requiere
        // Por ejemplo, un rol Admin puede heredar permisos de Editor

        return [];
    }

    /**
     * Obtiene las configuraciones específicas del rol.
     */
    private function getRoleConfigurations(Role $role, User $user): array
    {
        $modulos = [];
        if ($user->is_superuser == 1) {
            $modulos = $this->moduloService->getActiveModulos();
        } else {
            $modulos = $role->getAllModulos();
        }

        $menusItems = ModuloBuilder::build($modulos);
        return [
            'menu_items' => $menusItems,
            // 'dashboard_widgets' => $role->dashboardWidgets()->active()->get(),
            // 'theme' => $role->theme ?? config('app.default_theme'),
            // 'notifications' => $role->notificationTypes()->pluck('name')->toArray(),
        ];
    }
}
