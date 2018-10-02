@extends('layouts.admin.app')

@section('styles')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row pt-3">
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
                        <div id="ok"></div>
                        {{ csrf_field() }}
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered" id="table">
                                <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th class="text-center">Nome</th>
                                        <th class="text-center">CPF</th>
                                        <th class="text-center">Email</th>
                                        <th class="text-center">Estado</th>
                                        <th class="text-center">Actions</th>
                                    </tr>
                                </thead>
                                @foreach($data as $item)
                                <tr class="item{{$item->id}}">
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->full_name}}</td>
                                    <td>{{$item->cpf}}</td>
                                    <td>{{$item->email}}</td>
                                    <td>{{$item->status}}</td>
                                    <td class="float-right">
                                        @can('peoples.show', Model::class)
                                            <a href="{{ route('peoples.show', $item->id) }}" class="btn btn-outline-success btn-sm"><i class="fa fa-eye"></i></a>
                                        @endcan
                                        @can('peoples.edit', Model::class)
                                            <a href="{{ route('peoples.edit', $item->id) }}" class="btn btn-outline-info btn-sm"><i class="fa fa-edit"></i></a>
                                        @endcan
                                        <button class="delete-modal btn btn-outline-danger btn-sm"
                                            data-info="{{$item->id}},{{$item->full_name}}">
                                            <i class="fa fa-trash"></i>
                                        </button></td>
                                </tr>
                                @endforeach
                            </table>
                        </div>
                </div>
            </div>
        </div>
    </div>
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"></h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="deleteContent">
                        Tem certeza de que deseja excluir <span class="dname"></span> ? <span
                            class="hidden did"></span>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn actionBtn" data-dismiss="modal">
                            <span id="footer_action_button" class='glyphicon'> </span>
                        </button>
                        <button type="button" class="btn btn-warning" data-dismiss="modal">
                            <span class='glyphicon glyphicon-remove'></span> Close
                        </button>
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
            $('#table').DataTable({
                "language": {
                    "lengthMenu": "Exibição _MENU_  registros por página",
                    "zeroRecords": "Nada encontrado - sorry",
                    "info": "Mostrando _PAGE_ página de _PAGES_",
                    "infoEmpty": "Nenhum registro disponível",
                    "infoFiltered": "(filtrado de _MAX_ total registros)",
                    "sSearch": "Pesquisar:",
                    "sUrl":"",
                    "oPaginate": {
                        "sPrevious": "Anterior",
                        "sNext": "Próxima"
                    },
                }
            } );
        });
  </script>

    <script>
    $(document).on('click', '.delete-modal', function() {
        $('#footer_action_button').text(" Delete");
        $('#footer_action_button').removeClass('glyphicon-check');
        $('#footer_action_button').addClass('glyphicon-trash');
        $('.actionBtn').removeClass('btn-success');
        $('.actionBtn').addClass('btn-danger');
        $('.actionBtn').removeClass('edit');
        $('.actionBtn').addClass('delete');
        $('.modal-title').text('Delete');
        $('.deleteContent').show();
        $('.form-horizontal').hide();
        var stuff = $(this).data('info').split(',');
        $('.did').text(stuff[0]);
        $('.dname').html(stuff[1]);
        $('#myModal').modal('show');
    });

    $('.modal-footer').on('click', '.delete', function() {
        $.ajax({
            type: 'post',
            url: '/peoples/delete/item',
            data: {
                '_token': $('input[name=_token]').val(),
                'id': $('.did').text()
            },
            success: function(data) {
                $('.item' + $('.did').text()).remove();
                $('#ok').html('<div class="alert alert-success">O item com id ' +  $('.did').text() + ' foi excluido!! </div>');
            },

            error: function(data) {
                $('#ok').html('<div class="alert alert-danger">O item com id ' +  $('.did').text() + ' não foi excluido!! </div>');
            }
        });
    });
</script>
@endsection
