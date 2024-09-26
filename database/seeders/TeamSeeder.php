<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Team;

class TeamSeeder extends Seeder
{
    public function run(): void
    {
        Team::factory()->create([
            'name' => 'PHP',
            'descrição' => 'sala de aula',
            'teachers_id' => '1',
            'senha' => 'ramon123'
        ]);

        Team::factory()->create([
            'name' => 'Java',
            'descrição' => 'sala de aula',
            'teachers_id' => '2',
            'senha' => 'lucasgarofolo123'
        ]);

        Team::factory()->create([
            'name' => 'Banco de Dados',
            'descrição' => 'sala de aula',
            'teachers_id' => '3',
            'senha' => 'andressa123'
        ]);

        Team::factory()->create([
            'name' => 'Escola',
           'descrição' => 'sala de aula',
            'teachers_id' => '4',
            'senha' => 'ernesto123'
        ]);

    }
}
