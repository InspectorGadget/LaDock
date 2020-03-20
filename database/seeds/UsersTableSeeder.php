<?php

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
        $user = new \App\User;
        $user->email = 'admin@rtgnetworks.com';
        $user->password = \Illuminate\Support\Facades\Hash::make('password');
        $user->role = '1';
        $user->save();
    }
}
