@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h1 class="mb-4">Cadastrar Editora</h1>

    <form action="{{ route('publishers.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nome*</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" 
                   id="name" name="name" value="{{ old('name') }}" required>
            @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="address" class="form-label">Endereço</label>
            <textarea class="form-control @error('address') is-invalid @enderror" 
                      id="address" name="address" rows="2">{{ old('address') }}</textarea>
            @error('address')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <button type="submit" class="btn btn-success">
            <i class="bi bi-save"></i> Salvar
        </button>
        <a href="{{ route('publishers.index') }}" class="btn btn-secondary">
            <i class="bi bi-arrow-left"></i> Cancelar
        </a>
    </form>
</div>
@endsection