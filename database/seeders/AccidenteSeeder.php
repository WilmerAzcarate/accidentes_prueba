<?php

namespace Database\Seeders;

use App\Models\Accidente;
use App\Models\Persona;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AccidenteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Accidente::factory(220)->create();

        $personas = Persona::all();

        foreach ($personas as $persona) {
            $count = rand(1,10);
            $accidentes = Accidente::inRandomOrder()->take($count)->get()->pluck('id');
            $persona->accidentes()->attach($accidentes);
        }

    }
}
