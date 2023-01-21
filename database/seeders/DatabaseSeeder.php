<?php

namespace Database\Seeders;

use App\Models\Categorium;
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
        // \App\Models\User::factory(10)->create();
        $lugar = new Lugar();
        
        $lugar->Departamento = "Junin";
        $lugar->save();
        $categoria = new Categorium();
        $categoria->nombre = "Minivan";
        $categoria->save();
    }
}
