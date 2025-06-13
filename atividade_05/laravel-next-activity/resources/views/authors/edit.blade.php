@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h1 class="mb-4">Editar Autor</h1>

    <form action="{{ route('authors.update', $author) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Nome*</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" 
                   id="name" name="name" value="{{ old('name', $author->name) }}" required>
            @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="bio" class="form-label">Biografia</label>
            <textarea class="form-control @error('bio') is-invalid @enderror" 
                      id="bio" name="bio" rows="3">{{ old('bio', $author->bio) }}</textarea>
            @error('bio')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">
            <i class="bi bi-save"></i> Atualizar
        </button>
        <a href="{{ route('authors.index') }}" class="btn btn-secondary">
            <i class="bi bi-arrow-left"></i> Cancelar
        </a>
    </form>
</div>
@endsection