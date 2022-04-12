<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pagina;

class PaginaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $existesobre = Pagina::where('tipo', '=', 'Sobre')->count();
        if ($existesobre)  {
            $paginaSobre = Pagina::where('tipo','=', 'sobre')->first();
            echo "Atualizando página sobre\n";
        } else {
            $paginaSobre = new Pagina ();
            $paginaSobre->tipo = 'sobre';
            echo "Cadastrando pagina sobre\n";
        }

        $paginaSobre->titulo = 'Empresa';
        $paginaSobre->descrição = 'Breve apresentação da empresa.';
        $paginaSobre->texto = 'texto de apresentação detalhada da empresa.';
        $paginaSobre->imagem ='/img/anuncio_.jpg';
        $paginaSobre->save();
        echo "Pagina sobre salva com sucesso\n";
    }
}
            