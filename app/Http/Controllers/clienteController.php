<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use Inertia\Inertia;
use Illuminate\Support\Facades\DB;

class ClienteController extends Controller
{
    public function list()
    {
        $clientes = DB::table('cliente')->get();
        return Inertia::render('Clients/ListClient', ['clientes' => $clientes]);
    }

    public function new()
    {
        return Inertia::render('Clients/RegisterClient');
    }

    public function salvarnovo(Request $dados)
    {
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

        return redirect()->route('listclient');
    }

    public function edit(Request $dados)
    {
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

        return redirect()->route('listclient');
    }

    public function delete(Request $id)
    {
        $cliente = Cliente::find($id);
        $cliente->delete();

        return redirect()->route('listclient');
    }
}
