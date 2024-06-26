@extends('layouts.main')
@section('title', 'Autores')
@section('content')

<div class="container">
        
    <table class="table mt-3">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Idade</th>
            </tr>
        </thead>
        <tbody>
            @if ($autores->count())
                @foreach ($autores as $autor)
                    <tr>
                        <td>{{ $autor->id }}</td>
                        <td>{{ $autor->nome }}</td>
                        <td>{{ $autor->idade }}</td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="8">Nenhum autor encontrado.</td>
                </tr>
            @endif
        </tbody>
    </table>

        <div class="container">
            <nav aria-label="Paginação">
                <ul class="pagination">
                    @if ($autores->onFirstPage())
                        <li class="page-item disabled">
                            <span class="page-link">&laquo;</span>
                        </li>
                    @else
                        <li class="page-item">
                            <a class="page-link" href="{{ $autores->url($autores->currentPage() - 1) }}"
                                rel="prev">&laquo;</a>
                        </li>
                    @endif

                    @for ($page = 1; $page <= $autores->lastPage(); $page++)
                        <li class="page-item {{ $page == $autores->currentPage() ? 'active' : '' }}">
                            <a class="page-link" href="{{ $autores->url($page) }}">{{ $page }}</a>
                        </li>
                    @endfor

                    @if ($autores->hasMorePages())
                        <li class="page-item">
                            <a class="page-link" href="{{ $autores->url($autores->currentPage() + 1) }}"
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
