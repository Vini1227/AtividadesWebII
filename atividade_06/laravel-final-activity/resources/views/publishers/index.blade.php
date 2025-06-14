@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h1 class="mb-4">Lista de Editoras</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('publishers.create') }}" class="btn btn-primary mb-3">
        <i class="bi bi-plus-circle"></i> Nova Editora
    </a>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Endereço</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @forelse($publishers as $publisher)
                <tr>
                    <td>{{ $publisher->id }}</td>
                    <td>{{ $publisher->name }}</td>
                    <td>{{ Str::limit($publisher->address, 30) }}</td>
                    <td class="d-flex gap-2">
                        <a href="{{ route('publishers.show', $publisher) }}" class="btn btn-sm btn-info">
                            <i class="bi bi-eye"></i>
                        </a>
                        <a href="{{ route('publishers.edit', $publisher) }}" class="btn btn-sm btn-warning">
                            <i class="bi bi-pencil"></i>
                        </a>
                        <form action="{{ route('publishers.destroy', $publisher) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Excluir esta editora?')">
                                <i class="bi bi-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center">Nenhuma editora encontrada.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection