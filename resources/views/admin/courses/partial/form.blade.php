<div class="row">
	<div class="col-md">
		<div class="form-group">
			{{ Form::label('name', 'Nome do curso') }}
			{{ Form::text('name', null, ['class' => 'form-control']) }}
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