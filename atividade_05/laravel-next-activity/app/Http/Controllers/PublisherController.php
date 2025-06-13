<?php

namespace App\Http\Controllers;

use App\Models\Publisher;
use Illuminate\Http\Request;

class PublisherController extends Controller
{
    // Lista todas as editoras
    public function index()
    {
        $publishers = Publisher::all();
        return view('publishers.index', compact('publishers'));
    }

    // Formulário de criação
    public function create()
    {
        return view('publishers.create');
    }

    // Salva nova editora
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|unique:publishers|max:100',
            'address' => 'nullable|string', // Campo adicional
        ]);

        Publisher::create($request->all());

        return redirect()->route('publishers.index')
            ->with('success', 'Editora criada com sucesso!');
    }

    // Exibe uma editora específica
    public function show(Publisher $publisher)
    {
        return view('publishers.show', compact('publisher'));
    }

    // Formulário de edição
    public function edit(Publisher $publisher)
    {
        return view('publishers.edit', compact('publisher'));
    }

    // Atualiza a editora
    public function update(Request $request, Publisher $publisher)
    {
        $request->validate([
            'name' => 'required|string|max:100|unique:publishers,name,' . $publisher->id,
            'address' => 'nullable|string',
        ]);

        $publisher->update($request->all());

        return redirect()->route('publishers.index')
            ->with('success', 'Editora atualizada!');
    }

    // Remove a editora
    public function destroy(Publisher $publisher)
    {
        $publisher->delete();

        return redirect()->route('publishers.index')
            ->with('success', 'Editora excluída!');
    }
}