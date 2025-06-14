@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="card">
        <div class="card-header">
            <h2>Detalhes da Categoria</h2>
        </div>
        <div class="card-body">
            <p><strong>ID:</strong> {{ $category->id }}</p>
            <p><strong>Nome:</strong> {{ $category->name }}</p>
        </div>
        <div class="card-footer">
            <a href="{{ route('categories.index') }}" class="btn btn-secondary">Voltar</a>
        </div>
    </div>
</div>
@endsection