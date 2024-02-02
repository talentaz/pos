<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
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
        DB::table('users')->insert([
            'name'     => 'Admin',
            'email'    => 'admin@gmail.com',
            'password' => Hash::make('123456'),                
            'role'     => 1, // admin
        ]);
        DB::table('users')->insert([
            'name'     => 'Editor',
            'email'    => 'editor@gmail.com',
            'password' => Hash::make('123456'),                
            'role'     => 2, // editor
        ]);
        DB::table('users')->insert([
            'name'     => 'Visitor',
            'email'    => 'visitor@gmail.com',
            'password' => Hash::make('123456'),                
            'role'     => 3, // editor
        ]);
    }
}
