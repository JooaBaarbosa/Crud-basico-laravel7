<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Livro;

class LivroController extends Controller
{
    public function index(Request $request) {
        $livroCad = Livro::all();
        return view('livro.index', compact('livroCad'));
    }
    public function cadastrar(Request $request) {
        return view('livro.cadastrar');
    }
    public function salvar(Request $request) {
      
        $request->validate([
            'nomelivro' => 'required',
            'autor' => 'required',
        ], [
            'nomelivro.required' => 'nome do livro obrigatorio',
            'autor.required' => 'autor do livro obrigatorio',
        ]);

        $livro = $request->all();
        Livro::create($livro);
        
        return redirect(route('listar_livro'));
        
    }
    public function destroy($id)
    {
            $livro = Livro::findOrFail($id);
            $livro->delete();
    
            return redirect(route('listar_livro'));
    }

    public function editar(livro $livro)
   
    {
        return view('livro.editar',compact('livro'));
    }

    public function alterar(Request $request, livro $livro)
    {
       
        $request->validate([
            'nomelivro' => 'required',
            'categorialivro' => '
            ',
        ]);
        $livro->update($request->all());
        return redirect(route('listar_livro'));
    }
}
