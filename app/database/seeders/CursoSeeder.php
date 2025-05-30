<?php

namespace Database\Seeders;

use App\Models\Curso;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $curso1 = new Curso();
        // $curso1->nombre = 'Curso de PHP';
        // $curso1->descripcion = 'Aprende PHP desde cero';
        // $curso1->categoria = 'Programación';

        // $curso1->save();

        // $curso2 = new Curso();
        // $curso2->nombre = 'Curso de JavaScript';
        // $curso2->descripcion = 'Aprende JavaScript desde cero';
        // $curso2->categoria = 'Programación';

        // $curso2->save();

        Curso::factory(100)->create();
    }
}
