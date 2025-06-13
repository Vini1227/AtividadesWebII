@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="card">
        <div class="card-header">
            <h2 class="mb-0">Detalhes do Livro</h2>
        </div>
        <div class="card-body">
            <p><strong>ID:</strong> {{ $book->id }}</p>
            <p><strong>Título:</strong> {{ $book->title }}</p>
            <p><strong>Autor:</strong> 
                <a href="{{ route('authors.show', $book->author_id) }}">
                    {{ $book->author->name }}
                </a>
            </p>
            <p><strong>Editora:</strong> 
                <a href="{{ route('publishers.show', $book->publisher_id) }}">
                    {{ $book->publisher->name }}
                </a>
            </p>
            <p><strong>Categoria:</strong> 
                <a href="{{ route('categories.show', $book->category_id) }}">
                    {{ $book->category->name }}
                </a>
            </p>
        </div>
        <div class="card-footer">
            <a href="{{ route('books.index') }}" class="btn btn-secondary">
                <i class="bi bi-arrow-left"></i> Voltar
            </a>
        </div>
    </div>
</div>
@endsection