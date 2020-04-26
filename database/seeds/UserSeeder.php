<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Rakha',
            'email' => 'rakha@gmail.com',
            'password' => Hash::make('godenzonen'),
            'roles' => 'ADMIN'
        ]);
    }
}
