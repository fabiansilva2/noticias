<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use PHPUnit\Framework\Error\Notice;
use App\Models\Noticia;

class NoticiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Noticia::create([
            "titulo"=>"Testando uma seed",
            "conteudo"=>"Criando um conteudo com o php artisan",
            "status"=>"A",
            "imagem"=>"/storage/download.jpg",
            "data_publicacao"=>"18/06/2022",

        ]);
    }
}
