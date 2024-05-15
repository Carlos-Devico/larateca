<?php

namespace App\Http\Controllers;


use App\Models\Livro;
use Illuminate\Http\Request;

class LivroController extends Controller
{
    public function index()
    {
        // Lista todos os livros (assumindo que $livros é uma coleção paginada)
        $livros = Livro::paginate(3);

        // Retorna a view com os dados
        return view('livros.livros', ['livros' => $livros]);
       
    }

    public function show($id)
    {
        $livro = Livro::findOrFail($id);
        return response()->json($livro);
    }

  // ============= PAREI AQUI ===========

  //  // Método para armazenar um novo livro
  //  public function store(Request $request)
  //  {
  //      $livro = Livro::create($request->all());
  //      return response()->json($livro, 201);
  //  }

  //  // Método para atualizar um livro existente
  //  public function update(Request $request, $id)
  //  {
  //      $livro = Livro::findOrFail($id);
  //      $livro->update($request->all());
  //      return response()->json($livro, 200);
  //  }

  //  // Método para excluir um livro
  //  public function destroy($id)
  //  {
  //      $livro = Livro::findOrFail($id);
  //      $livro->delete();
  //      return response()->json(null, 204);
  //  }




}
