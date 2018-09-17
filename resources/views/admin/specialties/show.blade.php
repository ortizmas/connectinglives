@extends('layouts.admin.app')

@section('content')
<div class="container-fluid pt-2">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Especialidade
                    <a href="{{ route('specialties.index') }}" title="Voltar" class="btn btn-warning float-right">Voltar</a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p><strong>Nome: </strong>{{ $specialtie->name }}</p>
                    <p><strong>Descrição: </strong>{{ $specialtie->description }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection