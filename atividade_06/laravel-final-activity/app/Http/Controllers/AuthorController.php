<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    // Lista todos os autores
    public function index()
    {
        $authors = Author::all();
        return view('authors.index', compact('authors'));
    }

    // Formulário de criação
    public function create()
    {
        return view('authors.create');
    }

    // Salva novo autor
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|unique:authors|max:100',
            'bio' => 'nullable|string',
        ]);

        Author::create($request->all());

        return redirect()->route('authors.index')
            ->with('success', 'Autor criado com sucesso!');
    }

    // Exibe um autor específico
    public function show(Author $author)
    {
        return view('authors.show', compact('author'));
    }

    // Formulário de edição
    public function edit(Author $author)
    {
        return view('authors.edit', compact('author'));
    }

    // Atualiza o autor
    public function update(Request $request, Author $author)
    {
        $request->validate([
            'name' => 'required|string|max:100|unique:authors,name,' . $author->id,
            'bio' => 'nullable|string',
        ]);

        $author->update($request->all());

        return redirect()->route('authors.index')
            ->with('success', 'Autor atualizado!');
    }

    // Remove o autor
    public function destroy(Author $author)
    {
        $author->delete();

        return redirect()->route('authors.index')
            ->with('success', 'Autor excluído!');
    }
}