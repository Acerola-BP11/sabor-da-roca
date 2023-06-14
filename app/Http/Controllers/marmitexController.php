<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Marmitex;
<<<<<<< HEAD
use Illuminate\Support\Facades\DB;
=======
>>>>>>> 05e60471352d03ad6f9e9a4f65a92f64968f31ca
use Inertia\Inertia;

class marmitexController extends Controller
{
    public function list(){
<<<<<<< HEAD
        $marmitex = DB::table('marmitex')->get();
        var_dump([$marmitex]);
        // echo [$marmitex];
        return Inertia::render('Marmitex/ListMarmitex', [$marmitex]);
=======
        $marmitas = Marmitex::all();
        return Inertia::render('Marmitex/ListMarmitex', [$marmitas]);
>>>>>>> 05e60471352d03ad6f9e9a4f65a92f64968f31ca
    }

    public function new(){
        // return redirect('/listmarmitex');
    }

    public function salvarnovo(Request $dados) {
        $marmitex = new Marmitex;
        $marmitex->preco = $dados->input("preco");
        $marmitex->tamanho = $dados->input("tamanho");
        $marmitex->tara = $dados->input("tara");
        $marmitex->detalhamento = $dados->input("detalhamento");
        $marmitex->save();

        return redirect('listmarmitex');
    }
    
    public function excluir($id){
        $marmitex = Marmitex::find($id);
        $marmitex->delete();
    }
}
