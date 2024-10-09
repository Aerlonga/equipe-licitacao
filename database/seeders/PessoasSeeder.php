<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pessoa; 

class PessoasSeeder extends Seeder
{
    public function run()
    {
        $pessoas = ['Vitor', 'Thaynara', 'Francielle'];
        foreach ($pessoas as $nome) {
            Pessoa::create(['nome' => $nome]);
        }
    }
}