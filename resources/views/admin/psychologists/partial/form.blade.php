<div class="row">
    <div class="col-md">
		<div class="form-group">
			{{ Form::label('people_id', 'Nome') }}
			{{ Form::select('people_id',$people, null, ['class' => 'form-control']) }}
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
			{{ Form::label('status', 'Status') }}
			{{ Form::select('status', [1 => 'Ativo', 0 => 'Inativo'], null, ['class' => 'form-control']) }}
		</div>
	</div>
</div>


<div class="form-group">
	{{ Form::submit('Salvar', ['class' => 'btn btn-outline-success btn-sm']) }}
</div>

