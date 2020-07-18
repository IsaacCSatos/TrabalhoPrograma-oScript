<?php

use App\Models\Produto;
use Illuminate\Database\Seeder;

class ProdutoSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Produto::insert([
            ['nome' => 'Produto Y', 'descricao' => 'Descrçição do Produto X', 'quantidade' => 10, 'foto' => 'user','valor' => 20],
            ['nome' => 'Produto Z', 'descricao' => 'Descrçição do Produto X', 'quantidade' => 10, 'foto' => 'user','valor' => 20]
        ]);
    }
}
