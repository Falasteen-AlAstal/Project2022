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
        // reset users table
        DB::table('users')->truncate();

        // insert 3 users
        DB::table('users')->insert([
            [
                'name'=>'Juan Delacruz',
                'email'=>'juan@gmail.com',
                'password'=> bcrypt('123456'),
                'role_id'=> 1,
                'is_active'=> 1
            ],
            [
                'name' => 'Mr. Admin',
                'email' => 'admin@bookshop.com',
                'password'=> bcrypt('ad123456'),
                'role_id'=> 1,
                'is_active'=> 1
            ],
            [
                'name'=> 'Mr. User',
                'email'=> 'user@bookshop.com',
                'password'=> bcrypt('123456'),
                'role_id'=> 3,
                'is_active'=> 1
            ],
            [
                'name'=> 'Mr. Editor',
                'email'=> 'editor@bookshop.com',
                'password'=> bcrypt('123456'),
                'role_id'=> 2,
                'is_active'=> 1
            ],
        ]);
    }
}
