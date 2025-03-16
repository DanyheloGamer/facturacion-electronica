<?php

declare(strict_types=1);

namespace App\Builders\Sistema;

class ModuloBuilder
{
    public static function build($modulos)
    {
        $sidebarItems = [];

        foreach ($modulos as $modulo) {

            $subModulos = $modulo->subModulos()->orderBy('orden')->get();

            if ($subModulos->count() > 0) {
                $menuItem = [
                    'id' => $modulo->id,
                    'modulo' => $modulo->modulo,
                    'enlace' => $modulo->enlace,
                    'icono' => $modulo->direccion_icono,
                    'subMenus' => self::buildSubModulos($subModulos)
                ];
            } else {
                $menuItem = [
                    'id' => $modulo->id,
                    'modulo' => $modulo->modulo,
                    'enlace' => $modulo->enlace,
                    'icono' => $modulo->direccion_icono,
                    'subMenus' => []
                ];
            }

            $sidebarItems[] = $menuItem;
        }

        return $sidebarItems;
    }

    /**
     * @param mixed $subModulos
     *
     * @return array
     */
    private static function buildSubModulos(mixed $subModulos): array
    {
        $items = [];
        foreach ($subModulos as $subModulo) {
            $menuItem = [
                'id' => $subModulo->id,
                'modulo' => $subModulo->modulo,
                'enlace' => $subModulo->enlace,
                'icono' => $subModulo->direccion_icono,
            ];
            $items[] = $menuItem;
        }

        return $items;
    }

    /**
     * @param mixed $menus
     *
     * @return array
     */
    private static function buildMenus(mixed $menus): array
    {
        $items = [];

        foreach ($menus as $menu) {
            $menuItem = [
                'title' => $menu->nombre,
                'icon' => $menu->icono,
                'to' => $menu->ruta
            ];

            // Si el menú tiene hijos, procesarlos recursivamente
            $children = $menu->subMenus()
                ->orderBy('orden')
                ->get();

            if ($children->count() > 0) {
                $menuItem['children'] = self::buildMenus($children);
            }

            $items[] = $menuItem;
        }

        return $items;
    }
}
