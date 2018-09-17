@extends('layouts.admin.app')

@section('content')
<div class="container-fluid pt-2">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Nível
                    <a href="{{ route('levels.index') }}" title="Voltar" class="btn btn-warning float-right">Voltar</a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p><strong>Nível Acadêmico: </strong>{{ $level->academic_level }}</p>
                    <p><strong>Status: </strong>{{ $level->status }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection