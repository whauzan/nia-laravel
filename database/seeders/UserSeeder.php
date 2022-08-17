<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'id' => 1011,
            'name' => 'adminsdmo',
            'divisi' => 'sdm_operasional',
            'password' => Hash::make('sdm123'),
            'role' => 'adminsdm'
        ]);

        User::create([
            'id' => 1012,
            'name' => 'adminit',
            'divisi' => 'it',
            'password' => Hash::make('adminit123'),
            'role' => 'adminit'
        ]);

        User::create([
            'id' => 1013,
            'name' => 'adminkeuangan',
            'divisi' => 'keuangan',
            'password' => Hash::make('adminkeuangan123'),
            'role' => 'adminkeuangan'
        ]);
    }
}
