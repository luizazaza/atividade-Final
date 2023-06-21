<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Contatos;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $contato1 = Contatos::create([
            'nome' => 'Lucas',
            'fone' => '91234-5678',
            'email' => 'lucas@etec.sp.gov.br',
            'bio' => 'Um cara aí',
        ]);

        $contato2 = Contatos::create([
            'nome' => 'Amanda',
            'fone' => '92234-5678',
            'email' => 'amanda@etec.sp.gov.br',
            'bio' => 'Uma garota aí',
        ]);
        
        $contato3 = Contatos::create([
            'nome' => 'Felipe',
            'fone' => '93234-5678',
            'email' => 'felipe@etec.sp.gov.br',
            'bio' => 'Um cara aí',
        ]);
        
        $contato4 = Contatos::create([
            'nome' => 'Vitor',
            'fone' => '94234-5678',
            'email' => 'vitor@etec.sp.gov.br',
            'bio' => 'Um cara aí',
        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
