<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Pedido;
use app\Models\Pedido_marmitex;

class pedidocController extends Controller
{
    public function listPedidos(){
        $pedido = Pedido::all();
        if (count($pedido) <= 0){
            return view('lista_pedidos', ['Não há nenhum item cadastrado!']);
        }else{
            return view('lista_pedidos', [$pedido]);
        }
    }
    public function new(){
        return view('new_pedido');
    }

    public function salvarnovo(Request $dados) {
        $pedido = new Pedido;
        $pedido->total_pedido = $dados->input("total_pedido");
        $pedido->endereco = $dados->input("endereco");
        $pedido->id_cliente = $dados->input("id_cliente");
        $pedido->save();
        return redirect('/listClients');
    }

    public function list_itens(Request $dados){
        $id = $dados->input('id');
        $pedido = Pedido::find($id);
        $itens = Pedido_marmitex::where('id_pedido', $id);
        return view('lista_itens', [$pedido, $itens]);
    }

    public function excluirPedido(Request $id){
        $pedido = Pedido::find($id);
        $pedido->destroy();
    }
    
    public function excluirItem(Request $id){
        $item = Pedido_marmitex::find($id);
        $item->destroy($id);
    }
}
