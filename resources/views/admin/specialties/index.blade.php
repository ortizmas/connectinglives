@extends('layouts.admin.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Especialidades
                    @can('specialties.create', Model::class)
                        <a href="{{ route('specialties.create') }}" title="Cadastrar Especialidade" class="btn btn-outline-info btn-sm w-25 float-right">Nova Especialidade</a>
                    @endcan
                </div>
                

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Descrição</th>
                                <th scope="col" colspan="3">Opções</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($specialties as $specialtie)
                                <tr>
                                    <th scope="row">{{ $specialtie->id }}</th>
                                    <td>{{ $specialtie->name }}</td>
                                    <td>{{ $specialtie->description }}</td>
                                    <td>
                                        @can('specialties.show', Model::class)
                                            <a href="{{ route('specialties.show', $specialtie->id) }}" class="btn btn-outline-success btn-sm">Ver</a>
                                        @endcan
                                    </td>
                                    <td>
                                        @can('specialties.edit', Model::class)
                                            <a href="{{ route('specialties.edit', $specialtie->id) }}" class="btn btn-outline-info btn-sm">Alterar</a>
                                        @endcan
                                    </td>
                                    <td>
                                        @can('specialties.destroy', Model::class)
                                            {!! Form::open(['route' => ['specialties.destroy', $specialtie->id] , 'method' => 'DELETE']) !!}
                                                <button class="btn btn-danger btn-sm">Excluir</button>
                                            {!! Form::close() !!}
                                        @endcan
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    {{ $specialties->render() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
