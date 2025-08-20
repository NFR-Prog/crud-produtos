@extends('layouts.app')

@section('title', 'Lista de Produtos')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1>Produtos</h1>
    <a href="{{ route('produtos.create') }}" class="btn btn-primary">
        Novo Produto
    </a>
</div>

<div class="card">
    <div class="card-body">
        @if($produtos->count() > 0)
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Preço</th>
                            <th>Descrição</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($produtos as $produto)
                        <tr>
                            <td>{{ $produto->id }}</td>
                            <td>{{ $produto->nome }}</td>
                            <td>R$ {{ number_format($produto->preco, 2, ',', '.') }}</td>
                            <td>{{ Str::limit($produto->descricao, 50) }}</td>
                            <td>
                                <div class="btn-group" role="group">
                                    <a href="{{ route('produtos.show', $produto) }}" 
                                       class="btn btn-sm btn-info">Ver</a>
                                    <a href="{{ route('produtos.edit', $produto) }}" 
                                       class="btn btn-sm btn-warning">Editar</a>
                                    <form action="{{ route('produtos.destroy', $produto) }}" 
                                          method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger"
                                                onclick="return confirm('Tem certeza?')">
                                            Excluir
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <div class="text-center py-4">
                <p class="text-muted">Nenhum produto cadastrado.</p>
                <a href="{{ route('produtos.create') }}" class="btn btn-primary">
                    Cadastrar Primeiro Produto
                </a>
            </div>
        @endif
    </div>
</div>
@endsection