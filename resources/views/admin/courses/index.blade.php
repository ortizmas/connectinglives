@extends('layouts.admin.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Cursos
                    @can('courses.create', Model::class)
                        <a href="{{ route('courses.create') }}" title="Cadastrar Curso" class="btn btn-outline-info btn-sm w-25 float-right">Novo Curso</a>
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
                                <th scope="col">Status</th>
                                <th scope="col" colspan="3">Opções</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($courses as $course)
                                <tr>
                                    <th scope="row">{{ $course->id }}</th>
                                    <td>{{ $course->name }}</td>
                                    <td>{{ $course->status }}</td>
                                    <td>
                                        @can('courses.show', Model::class)
                                            <a href="{{ route('courses.show', $course->id) }}" class="btn btn-outline-success btn-sm">Ver</a>
                                        @endcan
                                    </td>
                                    <td>
                                        @can('courses.edit', Model::class)
                                            <a href="{{ route('courses.edit', $course->id) }}" class="btn btn-outline-info btn-sm">Alterar</a>
                                        @endcan
                                    </td>
                                    <td>
                                        @can('courses.destroy', Model::class)
                                            {!! Form::open(['route' => ['courses.destroy', $course->id] , 'method' => 'DELETE']) !!}
                                                <button class="btn btn-danger btn-sm">Excluir</button>
                                            {!! Form::close() !!}
                                        @endcan
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    {{ $courses->render() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
