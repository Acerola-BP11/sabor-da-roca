<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Marmitex;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

class MarmitexController extends Controller
{
    public function list()
    {
        $marmitex = DB::table('marmitex')->get();
        return Inertia::render('Marmitex/ListMarmitex', ['marmitex' => $marmitex]);
    }

    public function listGuest()
    {
        $marmitex = DB::table('marmitex')->get();
        return Inertia::render('Marmitex/ListGuest', ['marmitex' => $marmitex]);
    }

    public function new()
    {
        return Inertia::render('Marmitex/RegisterMarmitex');
    }

    public function edit(Request $request)
    {
        $id = $request->input('id');
        $marmitex = Marmitex::find($id);
        $marmitex->preco = $request->input("preco");
        $marmitex->tamanho = $request->input("tamanho");
        $marmitex->tara = $request->input("tara");
        $marmitex->detalhamento = $request->input("detalhamento");
        $marmitex->save();
        return redirect()->route('listmarmitex');
    }

    public function salvarnovo(Request $request)
    {
        $marmitex = new Marmitex;
        $marmitex->preco = $request->input("preco");
        $marmitex->tamanho = $request->input("tamanho");
        $marmitex->tara = $request->input("tara");
        $marmitex->detalhamento = $request->input("detalhamento");
        $marmitex->save();

        return redirect()->route('listmarmitex');
    }

    public function excluir($id)
    {
        $marmitex = Marmitex::find($id);
        $marmitex->delete();
        return redirect()->route('listmarmitex');
    }
}