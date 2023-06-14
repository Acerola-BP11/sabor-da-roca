<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use Inertia\Inertia;
use Illuminate\Support\Facades\DB;

class clienteController extends Controller
{
    public function list(){
        $clientes = DB::table('cliente')->get();
        // return Inertia::render('Clients/ListClient', [$clientes]);
        return Inertia::render('Clients/ListClient');
    }
    public function new(){
        return Inertia::render('Clients/RegisterClient');
    }

    public function salvarnovo(Request $dados) {
        $cliente = new Cliente;
        $cliente->nome = $dados->input("nome");
        $cliente->rua = $dados->input("rua");
        $cliente->complemento = $dados->input("complemento");
        $cliente->cidade = $dados->input("cidade");
        $cliente->numero_fixo = $dados->input("numero_fixo");
        $cliente->ddd_fixo = $dados->input("ddd_fixo");
        $cliente->ddd_cel = $dados->input("ddd_cel");
        $cliente->numero_cel = $dados->input("numero_cel");
        $cliente->cpf = $dados->input("cpf");
        $cliente->nascimento = $dados->input("nascimento");
        $cliente->rg = $dados->input("rg");
        $cliente->save();
        return redirect('/listclients');
    }

    public function edit($dados){
        $id = $dados->input('id');
        $cliente = Cliente::find($id);
        $cliente->nome = $dados->input("nome");
        $cliente->rua = $dados->input("rua");
        $cliente->complemento = $dados->input("complemento");
        $cliente->cidade = $dados->input("cidade");
        $cliente->numero_fixo = $dados->input("numero_fixo");
        $cliente->ddd_fixo = $dados->input("ddd_fixo");
        $cliente->ddd_cel = $dados->input("ddd_cel");
        $cliente->numero_cel = $dados->input("numero_cel");
        $cliente->cpf = $dados->input("cpf");
        $cliente->nascimento = $dados->input("nascimento");
        $cliente->rg = $dados->input("rg");
        $cliente->save();
        return redirect('/listClients');
    }

    public function excluir($id){
        $cliente = Cliente::find($id);
        $cliente->destroy();
    }
}
