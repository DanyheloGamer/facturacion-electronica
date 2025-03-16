<?php

namespace App\View\Components;

use App\Services\Sistema\RoleSelectionService;
use Illuminate\Support\Facades\Session;
use Illuminate\View\Component;
use Illuminate\View\View;

class AppLayout extends Component
{
    protected RoleSelectionService $roleSelectionService;
    public function __construct()
    {
        $this->roleSelectionService = new RoleSelectionService();
    }
    /**
     * Get the view / contents that represents the component.
     */
    public function render(): View
    {
        $this->roleSelectionService->setActiveRole(null);

        $active_role = json_decode(
            html_entity_decode(Session::get('active_role'), ENT_QUOTES)
        ) ?? [];

        $role_config = json_decode(
            html_entity_decode(Session::get('role_config'), ENT_QUOTES)
        ) ?? [];

        return view(
            'layouts.master',
            compact('active_role', 'role_config')
        );
    }
}
