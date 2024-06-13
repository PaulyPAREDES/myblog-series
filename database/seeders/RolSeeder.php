<?php

namespace Database\Seeders;

use App\Models\Rol;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rol = new Rol();
        $rol->name = "admin";
        $rol->save();

        $rol2 = new Rol();
        $rol2->name = "colaborador";
        $rol2->save();
    }
}
