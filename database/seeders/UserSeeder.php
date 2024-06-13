<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    
       User::create([
        'name' => 'Paulina Paredes',
        'email' => 'pauly.admin@gmail.com',
        'password'=> bcrypt('miblog10'),
        'rol_id'=> '1'
        ]);
    }
}
