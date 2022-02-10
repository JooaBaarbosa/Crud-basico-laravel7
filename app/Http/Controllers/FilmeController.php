<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Filme;

class FilmeController extends Controller
{
    public function index(Request $request) {
        $filmeCad = Filme::all();
        return view('filme.index', compact('filmeCad'));
    }

    public function cadastrar(Request $request) {
        return view('filme.cadastrar');
    }

    public function salvar(Request $request) {
      
        $request->validate([
            'nomefilme' => 'required',
            'categoriafilme' => 'required',
        ], [
            'nomefilme.required' => 'nome do filme obrigatorio',
            'categoriafilme.required' => 'categoria do filme obrigatorio',
        ]);

        $filme = $request->all();
        Filme::create($filme);
        
        return redirect(route('listar_filme'));
        
    }
    public function destroy($id)
{
        $filme = Filme::findOrFail($id);
        $filme->delete();

        return redirect(route('listar_filme'));
}
    public function editar(Filme $filme)
   
    {
        
        return view('filme.editar',compact('filme'));
    }

    public function alterar(Request $request, Filme $filme)
    {
       
        $request->validate([
            'nomefilme' => 'required',
            'categoriafilme' => 'required',
        ]);

        $filme->update($request->all());
        return redirect()->route('listar_filme');
    }
}
