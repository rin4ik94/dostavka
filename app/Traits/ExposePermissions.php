<?php

namespace App\Traits;

trait ExposePermissions
{
    /**
      * Get all user permissions.
      *
      * @return bool
      */
    // public function getAllPermissionsAttribute()
    // {
    //     return $this->getAllPermissions();
    // }

    /**
    * Get all user permissions in a flat array.
    *
    * @return array
    */
    public function getCanAttribute()
    {
        if (auth()->user() && $this->id === auth()->user()->id) {
            $items = ['Магазины', 'Филиали', 'Категории', 'Продукты', 'Заказы', 'Отчеты', 'Транзакции', 'Курьеры', 'Клиенты', 'Сотрудники', 'Настройки'];
            $permissions = [];
            foreach ($items as $permission) {
                if (auth()->user()->hasPermissionTo($permission)) {
                    $permissions[$permission] = true;
                } else {
                    $permissions[$permission] = false;
                }
            }
            return $permissions;
        }
    }
}
