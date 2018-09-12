@extends('layouts.admin.app')

@section('content')
<div class="container-fluid pt-2">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Alterar Dados
                    <a href="{{ route('peoples.index') }}" title="Voltar" class="btn btn-warning float-right">Voltar</a>
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
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    {!! Form::model($people, ['route' => ['peoples.update', $people->id], 'method' => 'PUT']) !!}

                        @include('admin.peoples.partial.form', ['some' => 'data'])

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <script src="//oss.maxcdn.com/jquery.mask/1.11.4/jquery.mask.min.js"></script>
    <script src="{{ asset('js/states-and-cities.js') }}" type="text/javascript" charset="utf-8"></script>
@endsection