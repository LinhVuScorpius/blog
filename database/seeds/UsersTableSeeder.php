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
        DB::table('users')->insert([
            'name' => 'linh',
            'email' => 'linh@gmail.com',
            'password' => 'linh1995',
        ]);
    }
}
