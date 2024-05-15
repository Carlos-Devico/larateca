<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Leitor;

class LeitorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $leitores = Leitor::paginate(6);

        // Retorna a view com os dados
        return view('leitores.leitores', ['leitores' => $leitores]);
        // dd($leitores);
    }

    // Exibir o formulário de cadastro
    public function create()
    {
        return view('leitores.create');
    }

    // Processar o cadastro
    public function store(Request $request)
    {
        // Validação dos dados
        $validatedData = $request->validate([
            'nome' => 'required|string|max:255',
            'idade' => 'required|integer|min:0',
            'email' => 'required|email|max:255|unique:leitores',
        ]);
        // Criação do novo leitor
        Leitor::create($validatedData);
        // Redirecionar ou retornar uma resposta
        return redirect()->route('leitores.create')->with('success', 'Leitor cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
