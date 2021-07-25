<?php

namespace Database\Seeders;

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
        \App\Models\User::create([
            'nisn' => '123456',
            'name' => 'Syaifuddin',
            'date_of_birth' => '2000-11-03',
            'class' => 'XI',
            'major' => 'IPA',
            'password' => '123456',
        ]);

        \App\Models\User::create([
            'nisn' => '12341234',
            'name' => 'Admin',
            'date_of_birth' => '2000-11-03',
            'password' => '12341234',
            'status' => 'guru',
            'role' => 'adm',
        ]);
    }
}