<div class="row">
	<div class="col-md">
		<div class="form-group">
			{{ Form::label('name', 'Nome') }}
			{{ Form::text('name', null, ['class' => 'form-control']) }}
		</div>
	</div>

	<div class="col-md">
		<div class="form-group">
			{{ Form::label('description', 'Descrição') }}
			{{ Form::text('description',null, ['class' => 'form-control']) }}
		</div>
	</div>
</div>

<div class="form-group">
	{{ Form::submit('Salvar', ['class' => 'btn btn-outline-success btn-sm']) }}
</div>