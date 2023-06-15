<?php

namespace App\Http\Controllers;
use App\Models\Comentario;
use Illuminate\Http\Request;
use Inertia\Inertia;
class comentarioController extends Controller
{
    public function list()
    {
        $comentarios = Comentario::all();
        return Inertia::render('Comentarios/listComent', [$comentarios]);
    }

    public function salvarnovo(Request $request)
    {
        $comentario = Comentario::create($request->all());
        return redirect();
    }

    public function show(Comentario $comentario)
    {
        return view('comentarios.show', compact('comentario'));
    }

    public function destroy(Comentario $comentario, $id)
    {
        $comentario->delete($id);
        return redirect('');
    }
}
