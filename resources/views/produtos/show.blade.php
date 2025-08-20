@extends('layouts.app')

@section('title', 'Detalhes do Produto')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h2>Detalhes do Produto</h2>
                <div>
                    <a href="{{ route('produtos.edit', $produto) }}" class="btn btn-warning">Editar</a>
                    <a href="{{ route('produtos.index') }}" class="btn btn-secondary">Voltar</a>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3">
                        <strong>ID:</strong>
                    </div>
                    <div class="col-md-9">
                        {{ $produto->id }}
                    </div>
                </div>
                <hr>
                
                <div class="row">
                    <div class="col-md-3">
                        <strong>Nome:</strong>
                    </div>
                    <div class="col-md-9">
                        {{ $produto->nome }}
                    </div>
                </div>
                <hr>
                
                <div class="row">
                    <div class="col-md-3">
                        <strong>Preço:</strong>
                    </div>
                    <div class="col-md-9">
                        R$ {{ number_format($produto->preco, 2, ',', '.') }}
                    </div>
                </div>
                <hr>
                
                <div class="row">
                    <div class="col-md-3">
                        <strong>Descrição:</strong>
                    </div>
                    <div class="col-md-9">
                        {{ $produto->descricao }}
                    </div>
                </div>
                <hr>
                
                <div class="row">
                    <div class="col-md-3">
                        <strong>Criado em:</strong>
                    </div>
                    <div class="col-md-9">
                        {{ $produto->created_at->format('d/m/Y H:i') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection