<div class="form-group">
	{{ Form::label('name', 'Nome') }}
	{{ Form::text('name', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
	{{ Form::label('email', 'Email') }}
	{{ Form::email('email', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
	{{ Form::label('cpf', 'CPF') }}
	{{ Form::text('cpf', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
	{{ Form::label('data_of_birth', 'Data de Nascimento') }}
	{{ Form::date('data_of_birth', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
	{{ Form::label('phone', 'Telefone') }}
	{{ Form::text('phone', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
	{{ Form::label('cep', 'CEP') }}
	{{ Form::text('cep', null, ['class' => 'form-control']) }}
</div>

<div class="row">
	


	<div class="form-group col">
		{!! Form::label('street', 'Rua') !!}
		{!! Form::text('street', null, ['class' => 'form-control', 'required']) !!}
	</div>
</div>

<div class="row">
	<div class="form-group col">
		{!! Form::label('number', 'Número') !!}
		{!! Form::text('number', null, ['class' => 'form-control', 'required']) !!}
	</div>

	<div class="form-group col">
		{!! Form::label('neighborhood', 'Bairro') !!}
		{!! Form::text('neighborhood', null, ['class' => 'form-control', 'required']) !!}
	</div>

	<div class="form-group col">
		{!! Form::label('complement', 'Complemento') !!}
		{!! Form::text('complement', null, ['class' => 'form-control', 'required']) !!}
	</div>

	<div class="form-group col-md-2">
		{!! Form::label('situation', 'Situação') !!}
		{!! Form::text('situation', null, ['class' => 'form-control', 'required']) !!}
	</div>
        <div class="form-group col-md-2">
		{!! Form::label('status', 'Situação') !!}
		{!! Form::select('status', [''=> 'Selecione','0' => 'Inativo', '1' => 'Ativo'], null, ['class' => 'form-control', 'required']) !!}
	</div>
</div>

<div class="form-group">
	{{ Form::submit('Salvar', null, ['class' => 'btn btn-outline-success btn-sm']) }}
</div>