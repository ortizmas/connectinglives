@extends('layouts.admin.app')
{{-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">  
         <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
         <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
         <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script> --}}
@section('styles')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
@endsection
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
                    
                    <table id="people-table" class="table table-bordered" >
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
                                {{-- <th>Curso</th> --}}
                               {{--  <th>Situação</th> --}}
                                <th scope="col">Status</th>
                                <th scope="col" colspan="3">Opções</th>
                            </tr>
                        </thead>
                    </table>                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(function() {
            $('#people-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: 'peoples/add-edit-remove-column-data',
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'full_name', name: 'full_name'},
                    {data: 'cpf', name: 'cpf'},
                    {data: 'email', name: 'email'},
                    {data: 'phone', name: 'phone'},
                    {data: 'created_at', name: 'created_at'},
                    {data: 'updated_at', name: 'updated_at'},
                    {data: 'action', name: 'action', orderable: false, searchable: false}
                ]
            });
        });
    </script>
@endsection
 
      