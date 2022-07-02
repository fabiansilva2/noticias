<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\NoticiaCategoria;

class Noticia_CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       NoticiaCategoria::create([
           "noticia_id" =>"4",
           "categoria_id" => "1"
       ]);

       NoticiaCategoria::create([
           "noticia_id" =>"4",
           "categoria_id" => "2"
       ]);

       NoticiaCategoria::create([
           "noticia_id" =>"3",
           "categoria_id" => "3"
       ]);

       NoticiaCategoria::create([
           "noticia_id" =>"2",
           "categoria_id" => "1"
       ]);

       NoticiaCategoria::create([
           "noticia_id" =>"2",
           "categoria_id" => "4"
       ]);
   }
}
