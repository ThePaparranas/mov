<?php

use App\Role;
use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('roles')->truncate();

        $role = new Role();
        $role->name = 'Dev';
        $role->description = 'The mother fucking Developer.';
        $role->save();

        $role = new Role();
        $role->name = 'Admin';
        $role->description = 'For Site Administration powers.';
        $role->save();

        $role = new Role();
        $role->name = 'Man';
        $role->description = 'For Uploaders, Helpers, and other slaves.';
        $role->save();

        $role = new Role();
        $role->name = 'Mod';
        $role->description = 'For Post and Comment Moderators.';
        $role->save();

        $role = new Role();
        $role->name = 'User';
        $role->description = 'For Peasants.';
        $role->save();
    }
}
