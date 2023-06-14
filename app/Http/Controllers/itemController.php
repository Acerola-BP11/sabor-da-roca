<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use Illuminate\Support\Facades\DB;

class itemController extends Controller
{
    public function listAll(){
        $itens = Item::all();
        return $itens;
    }

    public function listCategory(Request $data){
        $categoria = $data->input('categoria');
        $itens = DB::table('itens')->get('nome', 'descricao')->where('categoria', '=', $categoria);
        return $itens;
    }

    public function alterStock(Request $data){
        $estoque = $data->input('estoque');
        $id = $data->input('id');
        $item = Item::find($id);
        $item->estoque = $estoque;
        $item->save();
        return 'Estoque atualizado com sucesso!';
    }

    public function edit(Request $data){
        $id = $data->input('id');
        $item = Item::find($id);
        return view('item.edit')->with($item);
    }

    public function update(Request $data){
        $id = $data->input('id');
        $item = Item::find($id);
        $item->nome = $data->input('nome');
        $item->estoque = $data->input('estoque');
        $item->descricao = $data->input('descricao');
        $item->categoria = $data->input('categoria');
        $item->save();
        return 'Item editado com sucesso';
    }
    
    public function new(){
        return view('item.new');
    }

    public function saveNew(Request $data){
        $item = new Item;
        $item->nome = $data->input('nome');
        $item->estoque = $data->input('estoque');
        $item->descricao = $data->input('descricao');
        $item->categoria = $data->input('categoria');
        $item->save();
        return 'Item criado com sucesso';
    }

    public function destroy(Request $data){
        $id = $data->input('id');
        $item = Item::find($id);
        $item->delete();
        return 'Veiculo excluido com sucesso';
    }
}
