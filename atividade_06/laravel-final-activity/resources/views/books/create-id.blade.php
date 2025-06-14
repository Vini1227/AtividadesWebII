@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h1 class="mb-4">Adicionar Livro (Com IDs)</h1>
    <form action="{{ route('books.store.id') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Título*</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" 
                   id="title" name="title" value="{{ old('title') }}" required>
            @error('title')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
            <label for="publisher_id" class="form-label">ID da Editora*</label>
            <input type="number" class="form-control @error('publisher_id') is-invalid @enderror" 
                   id="publisher_id" name="publisher_id" value="{{ old('publisher_id') }}" required>
            @error('publisher_id')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
            <label for="author_id" class="form-label">ID do Autor*</label>
            <input type="number" class="form-control @error('author_id') is-invalid @enderror" 
                   id="author_id" name="author_id" value="{{ old('author_id') }}" required>
            @error('author_id')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
            <label for="category_id" class="form-label">ID da Categoria*</label>
            <input type="number" class="form-control @error('category_id') is-invalid @enderror" 
                   id="category_id" name="category_id" value="{{ old('category_id') }}" required>
            @error('category_id')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>
        <button type="submit" class="btn btn-success">
            <i class="bi bi-save"></i> Salvar
        </button>
    </form>
</div>
@endsection