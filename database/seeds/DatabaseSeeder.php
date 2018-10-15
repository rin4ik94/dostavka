<?php
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PermissionTableSeeder::class);
        $this->call(RegionTableSeeder::class);
        $this->call(WorkingModeTableSeeder::class);
        $this->call(ManagercategoriesTableSeeder::class);
        $this->call(ManagersTableSeeder::class);
        $this->call(RoleTableSeeder::class);
        $this->call(EmployeeTableSeeder::class);
        // $this->call(RoleHasPermissionTableSeeder::class);
        $this->call(ModelHasRoleTableSeeder::class);
        $this->call(WorkingTimeTabelSeeder::class);
        $this->call(CouriersTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);

    }
}
