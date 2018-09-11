@extends('layouts.admin.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Pessoas
                    @can('pessoas.create', Model::class)
                        <a href="{{ route('peoples.create') }}" title="Cadastrar Pessoa" class="btn btn-outline-info btn-sm w-25 float-right">Nova Pessoa</a>
                    @endcan
                </div>
                

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nome</th>
                                <th>CPF</th>
                                <th>Email</th>
                                {{-- <th>Data de Nascimento</th> --}}
                                <th>Telefone</th>
                                {{-- <th>CEP</th>
                                <th>Estado</th>
                                <th>Cidade</th>
                                <th>Rua</th>
                                <th>Número</th>
                                <th>Bairro</th>
                                <th>Complemento</th> --}}
                                <th>Curso</th>
                                <th>Situação</th>
                                <th scope="col">Status</th>
                                <th scope="col" colspan="3">Opções</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($peoples as $people)
                                <tr>
                                    <th scope="row">{{ $people->id }}</th>
                                    <td>{{ $people->full_name }}</td>
                                    <td>{{ $people->cpf }}</td>
                                    <td>{{ $people->email }}</td>
                                    {{-- <td>{{ $people->data_of_birth }}</td> --}}
                                    <td>{{ $people->phone }}</td>
                                    {{-- <td>{{ $people->cep }}</td>
                                   
                                    <td>{{ $people->street }}</td>
                                    <td>{{ $people->number }}</td>
                                    <td>{{ $people->neighborhood }}</td>
                                    <td>{{ $people->complement }}</td> --}}
                                    <td>{{ $people->course_id }}</td>
                                    <td>{{ $people->situation }}</td>
                                    <td>{{ $people->status }}</td>
                                    <td>
                                        @can('peoples.show', Model::class)
                                            <a href="{{ route('peoples.show', $people->id) }}" class="btn btn-outline-success btn-sm">Ver</a>
                                        @endcan
                                    </td>
                                    <td>
                                        @can('peoples.edit', Model::class)
                                            <a href="{{ route('peoples.edit', $people->id) }}" class="btn btn-outline-info btn-sm">Alterar</a>
                                        @endcan
                                    </td>
                                    <td>
                                        @can('peoples.destroy', Model::class)
                                            {!! Form::open(['route' => ['peoples.destroy', $people->id] , 'method' => 'DELETE']) !!}
                                                <button class="btn btn-danger btn-sm">Excluir</button>
                                            {!! Form::close() !!}
                                        @endcan
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
