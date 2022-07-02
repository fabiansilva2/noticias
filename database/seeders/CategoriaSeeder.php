<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Categoria;

class CategoriaSeeder extends Seeder
{
    public function run()
    {
        Categoria::create([
            "categoria" => "Política"
        ]);

        Categoria::create([
            "categoria" => "Esportes"
        ]);

        Categoria::create([
            "categoria" => "Economia"
        ]);

        Categoria::create([
            "categoria" => "Eleições"
        ]);

        Categoria::create([
            "categoria" => "Laser"
        ]);

        Categoria::create([
            "categoria" => "Entretenimento"
        ]);
    }
}
