@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h1 class="mb-4">Lista de Livros</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="mb-3">
        <a href="{{ route('books.create.id') }}" class="btn btn-success">
            <i class="bi bi-plus-circle"></i> Adicionar (Com ID)
        </a>
        <a href="{{ route('books.create.select') }}" class="btn btn-primary">
            <i class="bi bi-plus-circle"></i> Adicionar (Com Select)
        </a>
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Autor</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @forelse($books as $book)
                <tr>
                    <td>{{ $book->id }}</td>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->author->name }}</td>
                    <td class="d-flex gap-2">
                        <a href="{{ route('books.show', $book) }}" class="btn btn-sm btn-info">
                            <i class="bi bi-eye"></i>
                        </a>
                        <a href="{{ route('books.edit', $book) }}" class="btn btn-sm btn-warning">
                            <i class="bi bi-pencil"></i>
                        </a>
                        <form action="{{ route('books.destroy', $book) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Excluir este livro?')">
                                <i class="bi bi-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center">Nenhum livro encontrado.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <!-- Paginação -->
    <div class="d-flex justify-content-center">
        {{ $books->links() }}
    </div>
</div>
@endsection