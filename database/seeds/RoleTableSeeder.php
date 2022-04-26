<?php

use Illuminate\Database\Seeder;
use App\Role;
class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_user=new Role();
        $role_user->name="Student";
        $role_user->description="A Normal Student";
        $role_user->save();

         $role_teacher=new Role();
        $role_teacher->name="Teacher";
        $role_teacher->description="Honourable Teacher";
        $role_teacher->save();

         $role_admin=new Role();
        $role_admin->name="Admin";
        $role_admin->description="An Admin to supervise";
        $role_admin->save();

    }
}
