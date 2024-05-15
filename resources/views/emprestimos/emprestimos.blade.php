@extends('layouts.main')
@section('title', 'Emprestimos')
@section('content')

<div class="container">
        
    <table class="table mt-3">
        <thead>
            <tr>
                <th>Id</th>
                <th>Data Empréstimo</th>
                <th>Previsão Devolução</th>
                <th>Leitor</th>
                <th>Livros</th>
            </tr>
        </thead>
        <tbody>
            @if ($emprestimos->count())
                @foreach ($emprestimos as $emprestimo)
                    <tr>
                        <td>{{ $emprestimo->id }}</td>
                        <td>{{ $emprestimo->data_emprestimo }}</td>
                        <td>{{ $emprestimo->data_devolucao}}</td>
                        <td>{{ $emprestimo->leitor_id }}</td>
                        <td>{{ $emprestimo->livro_id }}</td>
                  
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="8">Nenhum emprestimo encontrado.</td>
                </tr>
            @endif
        </tbody>
    </table>

        <div class="container">
            <nav aria-label="Paginação">
                <ul class="pagination">
                    @if ($emprestimos->onFirstPage())
                        <li class="page-item disabled">
                            <span class="page-link">&laquo;</span>
                        </li>
                    @else
                        <li class="page-item">
                            <a class="page-link" href="{{ $emprestimos->url($emprestimos->currentPage() - 1) }}"
                                rel="prev">&laquo;</a>
                        </li>
                    @endif

                    @for ($page = 1; $page <= $emprestimos->lastPage(); $page++)
                        <li class="page-item {{ $page == $emprestimos->currentPage() ? 'active' : '' }}">
                            <a class="page-link" href="{{ $emprestimos->url($page) }}">{{ $page }}</a>
                        </li>
                    @endfor

                    @if ($emprestimos->hasMorePages())
                        <li class="page-item">
                            <a class="page-link" href="{{ $emprestimos->url($emprestimos->currentPage() + 1) }}"
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
