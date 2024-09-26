<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Teacher;
use Illuminate\Database\Seeder;

 
class TeacherSeeder extends Seeder
{
   
    public function run(): void
    {
        Teacher::factory()->create([
            'name' => 'Ramon',
            'materia' => 'PHP',
            'RD' => '12345',
            'email' => 'ramon@example.com',
            'senha' => 'ramon123'
        ]);

        Teacher::factory()->create([
            'name' => 'Lucas',
            'materia' => 'Java',
            'RD' => '12345',
            'email' => 'lucas@example.com',
            'senha' => 'lucasgarofolo123'
        ]);

        Teacher::factory()->create([
            'name' => 'Andressa',
            'materia' => 'Banco de dados',
            'RD' => '12345',
            'email' => 'andressa@example.com',
            'senha' => 'andressa123'
        ]);

        Teacher::factory()->create([
            'name' => 'Ernesto',
            'materia' => 'Escola',
            'RD' => '12345',
            'email' => 'ernesto@example.com',
            'senha' => 'ernesto123'
        ]);

    }
}
    