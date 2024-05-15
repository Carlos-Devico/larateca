@extends('layouts.main')
@section('title', 'Leitores')
@section('content')

<div class="container">
    <h1 class="mb-4">Lista de Leitores</h1>
        
    <table class="table mt-3">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Idade</th>
                <th>E-mail</th>
            </tr>
        </thead>
        <tbody>
            @if ($leitores->count())
                @foreach ($leitores as $leitor)
                    <tr>
                        <td>{{ $leitor->id }}</td>
                        <td>{{ $leitor->nome }}</td>
                        <td>{{ $leitor->idade }}</td>
                        <td>{{ $leitor->email }}</td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="8">Nenhum leitor encontrado.</td>
                </tr>
            @endif
        </tbody>
    </table>

        <div class="container">
            <nav aria-label="Paginação">
                <ul class="pagination">
                    @if ($leitores->onFirstPage())
                        <li class="page-item disabled">
                            <span class="page-link">&laquo;</span>
                        </li>
                    @else
                        <li class="page-item">
                            <a class="page-link" href="{{ $leitores->url($leitores->currentPage() - 1) }}"
                                rel="prev">&laquo;</a>
                        </li>
                    @endif

                    @for ($page = 1; $page <= $leitores->lastPage(); $page++)
                        <li class="page-item {{ $page == $leitores->currentPage() ? 'active' : '' }}">
                            <a class="page-link" href="{{ $leitores->url($page) }}">{{ $page }}</a>
                        </li>
                    @endfor

                    @if ($leitores->hasMorePages())
                        <li class="page-item">
                            <a class="page-link" href="{{ $leitores->url($leitores->currentPage() + 1) }}"
                                rel="next">&raquo;</a>
                        </li>
                    @else
                        <li class="page-item disabled">
                            <span class="page-link">&raquo;</span>
                        </li>
                    @endif
                </ul>
            </nav>
        </div>
    </div>

@endsection
