@extends('layouts.admin.app')

@section('content')
<div class="container-fluid pt-2">
    <div class="row justify-content-center">
        <div class="col-md">
            <div class="card">
                <div class="card-header">
                    Dados da Pessoa
                    <a href="{{ route('peoples.index') }}" class="btn btn-outline-info btn-sm float-right">Voltar</a>
                </div>
                
               
                <div class="card-body">
                    <p><strong>Nome: </strong>{{ $people->full_name }}</p>
                    <p><strong>Email: </strong>{{ $people->email }}</p>
                    <p><strong>CPF: </strong>{{ $people->cpf }}</p>
                    <p><strong>Telefone: </strong>{{ $people->phone }}</p>
                    <p><strong>Data de Nascimento: </strong>{{ $people->data_of_birth }}</p>
                    <p><strong>Curso: </strong>{{ $people->course->name }}</p>
                    <p><strong>Status: </strong>{{ ($people->status == 1) ? 'Ativo' : 'Inativo' }}</p>
                </div>
            </div>
        </div>
        <div class="col-md">
            <div class="card">
                <div class="card-header">
                    Localização
                    <a href="{{ route('peoples.index') }}" class="btn btn-outline-info btn-sm float-right">Voltar</a>
                </div>
                
               
                <div class="card-body">
                    <p><strong>Pais: </strong>{{ $pais->name }}</p>
                    <p><strong>Estado: </strong>{{ $estado->name }}</p>
                    <p><strong>Cidade: </strong>{{ $cidade->name }}</p>
                    <p><strong>CEP: </strong>{{ $people->address->postal_code }}</p>
                    <p><strong>Rua: </strong>{{ $people->address->street }}</p>
                    <p><strong>Número: </strong>{{ $people->address->number }}</p>
                    <p><strong>Distrito: </strong>{{ $people->address->district }}</p>
                    <p><strong>Bairro: </strong>{{ $people->address->name }}</p>
                    <p><strong>Complemento: </strong>{{ $people->address->complement }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection