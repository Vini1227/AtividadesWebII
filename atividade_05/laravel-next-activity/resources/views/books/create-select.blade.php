@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h1 class="mb-4">Adicionar Livro (Com Select)</h1>
    <form action="{{ route('books.store.select') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Título*</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" 
                   id="title" name="title" value="{{ old('title') }}" required>
            @error('title')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
            <label for="publisher_id" class="form-label">Editora*</label>
            <select class="form-select @error('publisher_id') is-invalid @enderror" 
                    id="publisher_id" name="publisher_id" required>
                <option value="">Selecione...</option>
                @foreach($publishers as $publisher)
                    <option value="{{ $publisher->id }}" {{ old('publisher_id') == $publisher->id ? 'selected' : '' }}>
                        {{ $publisher->name }}
                    </option>
                @endforeach
            </select>
            @error('publisher_id')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
            <label for="author_id" class="form-label">Autor*</label>
            <select class="form-select @error('author_id') is-invalid @enderror" 
                    id="author_id" name="author_id" required>
                <option value="">Selecione...</option>
                @foreach($authors as $author)
                    <option value="{{ $author->id }}" {{ old('author_id') == $author->id ? 'selected' : '' }}>
                        {{ $author->name }}
                    </option>
                @endforeach
            </select>
            @error('author_id')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
            <label for="category_id" class="form-label">Categoria*</label>
            <select class="form-select @error('category_id') is-invalid @enderror" 
                    id="category_id" name="category_id" required>
                <option value="">Selecione...</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
            @error('category_id')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>
        <button type="submit" class="btn btn-success">
            <i class="bi bi-save"></i> Salvar
        </button>
        <a href="{{ route('books.index') }}" class="btn btn-secondary">
            <i class="bi bi-arrow-left"></i> Cancelar
        </a>
    </form>
</div>
@endsection