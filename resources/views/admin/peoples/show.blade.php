@extends('layouts.admin.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Pessoa</div>
                <a href="{{ route('peoples.index') }}" class="btn btn-outline-info btn-sm float-right">Voltar</a>
               
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p><strong>Nome: </strong>{{ $people->cours }}</p>
                    <p><strong>CPF: </strong>{{ $people->cpf }}</p>
                    <p><strong>Data de Nascimento: </strong>{{ $people->data_of_birth }}</p>
                    <p><strong>Telefone: </strong>{{ $people->phone }}</p>
                    <p><strong>CEP: </strong>{{ $people->cep }}</p>
                    
                    <p><strong>Rua: </strong>{{ $people->street }}</p>
                    <p><strong>Número: </strong>{{ $people->number }}</p>
                    <p><strong>Bairro: </strong>{{ $people->neighborhood }}</p>
                    <p><strong>Complemento: </strong>{{ $people->complement }}</p>
                    <p><strong>Curso: </strong>{{ $people->course_id }}</p>
                    <p><strong>Situação: </strong>{{ $people->situation }}</p>
                    <p><strong>Status: </strong>{{ ($people->status == 1) ? 'Ativo' : 'Inativo' }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection