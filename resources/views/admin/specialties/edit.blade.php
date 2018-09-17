@extends('layouts.admin.app')

@section('content')
<div class="container-fluid pt-2">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Especialidades
                    <a href="{{ route('specialties.index') }}" title="Voltar" class="btn btn-warning float-right">Voltar</a>
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

                    {!! Form::model($specialtie, ['route' => ['specialties.update', $specialtie->id], 'method' => 'PUT']) !!}

                        @include('admin.specialties.partial.form', ['some' => 'data'])

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection