@extends('layouts.admin.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Psicólogos
                    @can('psychologists.create', Model::class)
                        <a href="{{ route('psychologists.create') }}" title="Cadastrar Pessoa" class="btn btn-outline-info btn-sm w-25 float-right">Novo Psicólogo</a>
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
                                <th>CRP</th>
                                <th>Abordagem Psicoterapeuta</th>
                                <th>Especialidades</th>
                                <th>Público</th>
                                <th>Nível</th>
                                <th scope="col">Status</th>
                                <th scope="col" colspan="3">Opções</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($psychologists as $psychologist)
                                <tr>
                                    <th scope="row">{{ $psychologist->id }}</th>
                                    <td>{{ $psychologist->people->full_name }}</td>
                                    <td>{{ $psychologist->crp }}</td>
                                    <td>{{ $psychologist->therapeutic_approach }}</td>
                                    <td>{{ $psychologist->specialties_id }}</td>
                                    <td>{{ $psychologist->public }}</td>
                                   
                                    <td>{{ $psychologist->levels_id }}</td>
                                    
                                    <td>{{ ($psychologist->status == 1) ? 'Ativo' : 'Inativo' }}</td>
                                    <td>
                                        @can('psychologists.show', Model::class)
                                            <a href="{{ route('psychologists.show', $psychologist->id) }}" class="btn btn-outline-success btn-sm">Ver</a>
                                        @endcan
                                    </td>
                                    <td>
                                        @can('psychologists.edit', Model::class)
                                            <a href="{{ route('psychologists.edit', $psychologist->id) }}" class="btn btn-outline-info btn-sm">Alterar</a>
                                        @endcan
                                    </td>
                                    <td>
                                        @can('psychologists.destroy', Model::class)
                                            {!! Form::open(['route' => ['psychologists.destroy', $psychologist->id] , 'method' => 'DELETE']) !!}
                                                <button class="btn btn-danger btn-sm">Excluir</button>
                                            {!! Form::close() !!}
                                        @endcan
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>  
                    {{ $psychologists->render() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
