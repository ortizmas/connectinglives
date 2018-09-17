@extends('layouts.admin.app')

@section('content')
<div class="container-fluid pt-2">
    <div class="row justify-content-center">
        <div class="col-md">
            <div class="card">
                <div class="card-header">
                    Dados do Psicólogo
                    <a href="{{ route('psychologists.index') }}" class="btn btn-outline-info btn-sm float-right">Voltar</a>
                </div>
                
               
                <div class="card-body">
                    <p><strong>Nome: </strong>{{ $psychologist->people->full_name }}</p>
                    <p><strong>CRP: </strong>{{ $psychologist->crp }}</p>
                    <p><strong>Abordagem Psicoterapeutica: </strong>{{ $psychologist->therapeutic_approach }}</p>
                    <p><strong>Especialidades: </strong>{{ $psychologist->specialty->name }}</p>
                    <p><strong>Público: </strong>{{ $psychologist->public }}</p>
                    <p><strong>Nível: </strong>{{ $psychologist->level->academic_level }}</p>
                    <p><strong>Status: </strong>{{ ($psychologist->status == 1) ? 'Ativo' : 'Inativo' }}</p>
                </div>
            </div>
        </div>
        <div class="col-md">
            <div class="card">
                <div class="card-header">
                    Localização
                    <a href="{{ route('psychologists.index') }}" class="btn btn-outline-info btn-sm float-right">Voltar</a>
                </div>
                
              
            </div>
        </div>
    </div>
</div>
@endsection