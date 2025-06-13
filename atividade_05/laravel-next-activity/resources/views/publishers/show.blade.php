@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="card">
        <div class="card-header">
            <h2 class="mb-0">Detalhes da Editora</h2>
        </div>
        <div class="card-body">
            <p><strong>ID:</strong> {{ $publisher->id }}</p>
            <p><strong>Nome:</strong> {{ $publisher->name }}</p>
            <p><strong>Endereço:</strong> {{ $publisher->address ?? 'N/A' }}</p>
        </div>
        <div class="card-footer">
            <a href="{{ route('publishers.index') }}" class="btn btn-secondary">
                <i class="bi bi-arrow-left"></i> Voltar
            </a>
        </div>
    </div>
</div>
@endsection