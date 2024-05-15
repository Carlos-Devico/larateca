@extends('layouts.main')
@section('title', 'Criar Leitor')
@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Cadastrar Novo Leitor</h1>
    <form action="{{ route('leitores.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nome" class="form-label">Nome:</label>
            <input type="text" class="form-control" id="nome" name="nome" required>
        </div>
        <div class="mb-3">
            <label for="idade" class="form-label">Idade:</label>
            <input type="number" class="form-control" id="idade" name="idade" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
    @if(session('success'))
        <div class="alert alert-success mt-3">
            {{ session('success') }}
        </div>
    @endif
</div>
            
@endsection
