<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Serie;

class SerieController extends Controller
{
    public function index(Request $request) {
        $serieCad = Serie::all();
        return view('serie.index', compact('serieCad'));
    }
    public function cadastrar(Request $request) {
        return view('serie.cadastrar');
    }
    public function salvar(Request $request) {
      
        $request->validate([
            'nomeserie' => 'required',
            'categoriaserie' => 'required',
        ], [
            'nomeserie.required' => 'nome da serie obrigatorio',
            'categoriaserie.required' => 'categoria da serie obrigatorio',
        ]);

        $serie = $request->all();
        Serie::create($serie);
        
        return redirect(route('listar_serie'));
        
    }
    public function destroy($id)
    {
            $serie = Serie::findOrFail($id);
            $serie->delete();
    
            return redirect(route('listar_serie'));
    }

    public function editar(Serie $serie)
   
    {
        
        return view('serie.editar',compact('serie'));
    }

    public function alterar(Request $request, Serie $serie)
    {
       
        $request->validate([
            'nomeserie' => 'required',
            'categoriaserie' => 'required',
        ]);

        $serie->update($request->all());
        return redirect()->route('listar_serie');
    }
}
