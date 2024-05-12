@extends('layouts.main')
@section('title', 'Livros')
@section('content')

    <div class="container">
        
        <table class="table mt-3">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Título</th>
                    <th>ISBN</th>
                    <th>Gênero</th>
                    <th>Páginas</th>
                    <th>Ano de Lançamento</th>
                    <th>Autor</th>
                </tr>
            </thead>
            <tbody>
                @if ($livros->count())
                    @foreach ($livros as $livro)
                        <tr>
                            <td>{{ $livro->id }}</td>
                            <td>{{ $livro->titulo }}</td>
                            <td>{{ $livro->isbn }}</td>
                            <td>{{ $livro->genero }}</td>
                            <td>{{ $livro->numero_paginas }}</td>
                            <td>{{ $livro->ano_lancamento }}</td>
                            <td>{{ $livro->autor->nome }}</td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="7">Nenhum livro encontrado.</td>
                    </tr>
                @endif
            </tbody>
        </table>

        <div class="container">
            <nav aria-label="Paginação">
                <ul class="pagination">
                    @if ($livros->onFirstPage())
                        <li class="page-item disabled">
                            <span class="page-link">&laquo;</span>
                        </li>
                    @else
                        <li class="page-item">
                            <a class="page-link" href="{{ $livros->url($livros->currentPage() - 1) }}"
                                rel="prev">&laquo;</a>
                        </li>
                    @endif

                    @for ($page = 1; $page <= $livros->lastPage(); $page++)
                        <li class="page-item {{ $page == $livros->currentPage() ? 'active' : '' }}">
                            <a class="page-link" href="{{ $livros->url($page) }}">{{ $page }}</a>
                        </li>
                    @endfor

                    @if ($livros->hasMorePages())
                        <li class="page-item">
                            <a class="page-link" href="{{ $livros->url($livros->currentPage() + 1) }}"
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
