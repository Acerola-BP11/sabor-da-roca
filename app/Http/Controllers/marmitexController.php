<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Marmitex;
use app\Models\Item_marmitex;
class marmitexController extends Controller
{
    public function list(){
        $marmitas = Marmitex::all();
        return view('lista_marmitex', [$marmitas]);
    }
    public function new(){
        return view('new_marmitex');
    }

    public function salvarnovo(Request $dados) {
        $marmitex = new Marmitex;
        $marmitex->nome = $dados->input("preco");
        $marmitex->fabricante = $dados->input("tamanho");
        $marmitex->preco = $dados->input("tara");
        $marmitex->detalhamento = $dados->input("detalhamento");
        $marmitex->save();
        return redirect('/marmitex');
    }
    
    public function excluir($id){
        $marmitex = Marmitex::find($id);
        $marmitex->delete();
    }
}
