<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedido;
use App\Models\Pedido_marmitex;
use Inertia\Inertia;

class PedidoController extends Controller
{
    public function listPedidos()
    {
        $pedidos = Pedido::all();

        if ($pedidos->isEmpty()) {
            return Inertia::render('lista_pedidos', [
                'message' => 'Não há nenhum item cadastrado!'
            ]);
        } else {
            return Inertia::render('lista_pedidos', [
                'pedidos' => $pedidos
            ]);
        }
    }

    public function new()
    {
        return Inertia::render('new_pedido');
    }

    public function salvarnovo(Request $dados)
    {
        $pedido = new Pedido;
        $pedido->total_pedido = $dados->input('total_pedido');
        $pedido->endereco = $dados->input('endereco');
        $pedido->id_cliente = $dados->input('id_cliente');
        $pedido->save();

        return redirect('/listClients');
    }

    public function list_itens(Request $dados)
    {
        $id = $dados->input('id');
        $pedido = Pedido::find($id);
        $itens = Pedido_marmitex::where('id_pedido', $id)->get();

        return Inertia::render('lista_itens', [
            'pedido' => $pedido,
            'itens' => $itens
        ]);
    }

    public function excluirPedido(Request $request)
    {
        $id = $request->input('id');
        $pedido = Pedido::find($id);
        $pedido->delete();

        return redirect('/listPedidos');
    }
    
    public function excluirItem(Request $request)
    {
        $id = $request->input('id');
        $item = Pedido_marmitex::find($id);
        $item->delete();

        return redirect('/list_itens');
    }
}
