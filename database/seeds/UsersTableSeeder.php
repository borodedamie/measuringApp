<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@yahoo.com',
            'role' => 1,
            'password' => app('hash')->make('admin'), 
            'phone_number' => '08135019640',
            'age' => 26
        ]);
    }
}
