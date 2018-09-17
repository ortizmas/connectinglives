<div class="row">
    <div class="col-md">
		<div class="form-group">
			{{ Form::label('people_id', 'Nome') }}
			{{ Form::select('people_id',$pessoas, null, ['class' => 'form-control', 'placeholder' => ' -- Selecione o usuário -- ']) }}
		</div>
	</div>
	<div class="col-md">
		<div class="form-group">
			{{ Form::label('crp', 'CRP') }}
			{{ Form::text('crp', null, ['class' => 'form-control']) }}
		</div>
	</div>
	<div class="col-md">
		<div class="form-group">
			{{ Form::label('therapeutic_approach', 'Abordagem Psicoterapeutica') }}
			{{ Form::text('therapeutic_approach', null, ['class' => 'form-control']) }}
		</div>
	</div>
	<div class="col-md">
		<div class="form-group">
			{{ Form::label('public', 'Público') }}
			{{ Form::text('public', null, ['class' => 'form-control']) }}
		</div>
	</div>
        
</div>

<div class="row">
    <div class="col-md">
		<div class="form-group">
			{{ Form::label('specialties_id', 'Especialidades') }}
			{{ Form::select('specialties_id',$especialidades, null, ['class' => 'form-control', 'placeholder' => ' -- Selecione sua especialidade -- ']) }}
		</div>
	</div>
    <div class="col-md">
		<div class="form-group">
			{{ Form::label('levels_id', 'Nível') }}
			{{ Form::select('levels_id',$niveis, null, ['class' => 'form-control','placeholder' => ' -- Selecione seu nível -- ']) }}
		</div>
	</div>
	
	<div class="col-md">
		<div class="form-group">
			{{ Form::label('status', 'Status') }}
			{{ Form::select('status', [1 => 'Ativo', 0 => 'Inativo'], null, ['class' => 'form-control']) }}
		</div>
	</div>
</div>


<div class="form-group">
	{{ Form::submit('Salvar', ['class' => 'btn btn-outline-success btn-sm']) }}
</div>

