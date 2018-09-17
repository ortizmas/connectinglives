@extends('layouts.admin.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Níveis
                    @can('levels.create', Model::class)
                        <a href="{{ route('levels.create') }}" title="Cadastrar Nível" class="btn btn-outline-info btn-sm w-25 float-right">Nova Especialidade</a>
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
                                <th scope="col">Nível Acadêmico</th>
                                <th scope="col">Status</th>
                                <th scope="col" colspan="3">Opções</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($levels as $level)
                                <tr>
                                    <th scope="row">{{ $level->id }}</th>
                                    <td>{{ $level->academic_level }}</td>
                                    <td>{{ $level->status }}</td>
                                    <td>
                                        @can('levels.show', Model::class)
                                            <a href="{{ route('levels.show', $level->id) }}" class="btn btn-outline-success btn-sm">Ver</a>
                                        @endcan
                                    </td>
                                    <td>
                                        @can('levels.edit', Model::class)
                                            <a href="{{ route('levels.edit', $level->id) }}" class="btn btn-outline-info btn-sm">Alterar</a>
                                        @endcan
                                    </td>
                                    <td>
                                        @can('levels.destroy', Model::class)
                                            {!! Form::open(['route' => ['levels.destroy', $level->id] , 'method' => 'DELETE']) !!}
                                                <button class="btn btn-danger btn-sm">Excluir</button>
                                            {!! Form::close() !!}
                                        @endcan
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    {{ $levels->render() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
