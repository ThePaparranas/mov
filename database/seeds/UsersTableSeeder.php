<?php

use App\Role;
use App\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->truncate();

        $user_basic = Role::where('name', 'User')->first();
        $user_moderator = Role::where('name', 'Mod')->first();
        $user_manager = Role::where('name', 'Man')->first();
        $user_admin = Role::where('name', 'Admin')->first();
        $user_dev = Role::where('name', 'Dev')->first();

        $dev = new User();
        $dev->name = 'Sam Kitano';
        $dev->email = 'sam.kitano@gmail.com';
        $dev->password = bcrypt('secret');
        $dev->email_verified_at = Carbon::now();
        $dev->save();
        $dev->roles()->attach($user_dev);

        $admin = new User();
        $admin->name = 'João Caetano';
        $admin->email = 'thepaparranas@gmail.com';
        $admin->password = bcrypt('champion');
        $dev->email_verified_at = Carbon::now();
        $admin->save();
        $admin->roles()->attach($user_admin);

        $mod = new User();
        $mod->name = 'Bogus Mod';
        $mod->email = 'moderator@example.com';
        $mod->password = bcrypt('secret');
        $dev->email_verified_at = Carbon::now();
        $mod->save();
        $mod->roles()->attach($user_moderator);

        $man = new User();
        $man->name = 'Fake Manager';
        $man->email = 'manager@example.com';
        $man->password = bcrypt('secret');
        $dev->email_verified_at = Carbon::now();
        $man->save();
        $man->roles()->attach($user_manager);

        $user = new User();
        $user->name = 'Wannabe Sumtin';
        $user->email = 'user@example.com';
        $user->password = bcrypt('secret');
        $dev->email_verified_at = Carbon::now();
        $user->save();
        $user->roles()->attach($user_basic);

        // NOT VERIFIED
        $user = new User();
        $user->name = 'NotVerified';
        $user->email = 'notveryfied@example.com';
        $user->password = bcrypt('secret');
        // $dev->email_verified_at = Carbon::now();
        $user->save();
        $user->roles()->attach($user_basic);
    }
}
