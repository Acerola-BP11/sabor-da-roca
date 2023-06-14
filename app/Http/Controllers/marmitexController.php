<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Marmitex;
use Inertia\Inertia;

class marmitexController extends Controller
{
    public function list(){
        $marmitas = Marmitex::all();
        return Inertia::render('Marmitex/ListMarmitex', [$marmitas]);
    }

    public function new(){
        return redirect('/listmarmitex');
    }

    public function salvarnovo(Request $dados) {
        $marmitex = new Marmitex;
        $marmitex->preco = $dados->input("preco");
        $marmitex->tamanho = $dados->input("tamanho");
        $marmitex->tara = $dados->input("tara");
        $marmitex->detalhamento = $dados->input("detalhamento");
        $marmitex->save();
        return redirect('/listmarmitex');
    }
    
    public function excluir($id){
        $marmitex = Marmitex::find($id);
        $marmitex->delete();
    }
}
