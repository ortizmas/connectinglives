@extends('layouts.admin.app')
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">  
         <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
         <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
         <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
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
                    
                    <table class="table table-bordered" id="table">
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
                            @foreach ($peoples->data as $people)
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
                                    {{-- <td>{{ $people->course->name }}</td> --}}
                                    <td>{{ ($people->status == 1) ? 'Ativo' : 'Inativo' }}</td>
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

@section('scripts')
     <script>
          // $(function() {
          //       $('#table').DataTable({
          //       processing: true,
          //       serverSide: true
             
                
          //    });
          // });
        $('#table').DataTable({
            destroy:true,
            processing: true,
            serverSide: true,
            "pageLength": 20,
            ajax: '{{ url('peoples') }}',

            columns: [
            {mData: 'id', name: 'id'},
            {mData: 'first_name', name: 'first_name'},
            {mData: 'email', name: 'email'},
            ]
            });
    </script>
@endsection
 
      