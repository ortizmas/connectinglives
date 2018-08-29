<div class="form-group">
	{{ Form::label('cours', 'Nome do curso') }}
	{{ Form::text('cours', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
	{{ Form::label('status', 'Status') }}
	{{ Form::text('status', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
	{{ Form::submit('Salvar', null, ['class' => 'btn btn-outline-success btn-sm']) }}
</div>