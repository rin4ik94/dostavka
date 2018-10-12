<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            'Магазины',
            'Филиали',
            'Категории',
            'Продукты',
            'Заказы',
            'Отчеты',
            'Транзакции',
            'Курьеры',
            'Клиенты',
            'Сотрудники',
            'Настройки',
         ];
         
         foreach ($permissions as $permission) {
              Permission::create([
                'name' => $permission,
                'guard_name' => 'admin',
            ]);
         }
    }
}