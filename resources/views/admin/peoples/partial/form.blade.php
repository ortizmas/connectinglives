<div class="row">
	<div class="col-md">
		<div class="form-group">
			{{ Form::label('full_name', 'Nome') }}
			{{ Form::text('full_name', null, ['class' => 'form-control']) }}
		</div>
	</div>
	<div class="col-md">
		<div class="form-group">
			{{ Form::label('email', 'Email') }}
			{{ Form::email('email', null, ['class' => 'form-control']) }}
		</div>
	</div>
	<div class="col-md">
		<div class="form-group">
			{{ Form::label('cpf', 'CPF') }}
			{{ Form::text('cpf', null, ['class' => 'form-control']) }}
		</div>
	</div>
</div>

<div class="row">
	<div class="col-md">
		<div class="form-group">
			{{ Form::label('data_of_birth', 'Data de Nascimento') }}
			{{ Form::date('data_of_birth', null, ['class' => 'form-control']) }}
		</div>
	</div>
	<div class="col-md">
		<div class="form-group">
			{{ Form::label('phone', 'Telefone') }}
			{{ Form::text('phone', null, ['class' => 'form-control']) }}
		</div>
	</div>
	<div class="col-md">
		<div class="form-group">
			{{ Form::label('course_id', 'Curso') }}
			{{ Form::select('course_id', $cursos, null, ['class' => 'form-control', 'placeholder' => ' -- Selecione seu Curso -- ']) }}
		</div>
	</div>

	<div class="col-md">
		<div class="form-group">
			{{ Form::label('status', 'Status') }}
			{{ Form::select('status', [1 => 'Ativo', 0 => 'Inativo'], null, ['class' => 'form-control']) }}
		</div>
	</div>
</div>

{{-- Localização --}}
<hr>

@if ( $method === 'CREATE')
	<div class="row">
		<div class="col-md">
			<div class="form-group">
				<label for="postal_code" class="control-label">{{ trans('addresses.fields.postal_code') }}</label>
				<input id="postal_code" name="postal_code" data-autocomplete="true" data-mask="{{ config('states-and-cities.postal_code_mask') }}" type="text" class="form-control" >
			</div>
		</div>
		<div class="col-md">
			<div class="form-group">
				<label for="street" class="control-label">{{ trans('addresses.fields.street') }}</label>
				<input id="street" name="street"  type="text" class="form-control" >
			</div>
		</div>
		<div class="col-md">
			<div class="form-group">
				<label for="number" class="control-label">{{ trans('addresses.fields.number') }}</label>
				<input id="number" name="number"  type="text" class="form-control" >
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md">
			<div class="form-group">
				<label for="district" class="control-label">{{ trans('addresses.fields.district') }}</label>
				<input id="district" name="district"  type="text" class="form-control"  >
			</div>
		</div>
		<div class="col-md">
			<div class="form-group">
				<label for="complement" class="control-label">{{ trans('addresses.fields.complement') }}</label>
				<input id="complement" name="complement"  type="text" class="form-control" >
			</div>
		</div>
		<div class="col-md">
			<div class="form-group">
				<label for="name" class="control-label">{{ trans('addresses.fields.name') }}</label>
				<input id="name" name="name" type="text" class="form-control" >
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md">
			<div class="form-group">
				<label for="country_id" class="control-label">{{ trans('addresses.fields.country') }}*</label>
				<select name="country_id" id="country"  class="form-control"  required></select>
			</div>
		</div>
		<div class="col-md">
			<div class="form-group">
				<label for="state_id" class="control-label">{{ trans('addresses.fields.state') }}*</label>
				<select name="state_id"  id="state"  class="form-control state" required></select>
			</div>
		</div>
		<div class="col-md">
			<div class="form-group">
				<label for="city_id" class="control-label">{{ trans('addresses.fields.city') }}*</label>
				<select name="city_id"  id="city" class="form-control state" required></select>
			</div>
		</div>
	</div>
@else
	<div class="row">
		<div class="col-md">
			<div class="form-group">
				<label for="postal_code" class="control-label">{{ trans('addresses.fields.postal_code') }}</label>
				<input id="postal_code" name="postal_code" data-autocomplete="true" data-mask="{{ config('states-and-cities.postal_code_mask') }}" type="text" class="form-control"  value="{{ $address->postal_code }}">
			</div>
		</div>
		<div class="col-md">
			<div class="form-group">
				<label for="street" class="control-label">{{ trans('addresses.fields.street') }}</label>
				<input id="street" name="street"  type="text" class="form-control"  value="{{ $address->street }}">
			</div>
		</div>
		<div class="col-md">
			<div class="form-group">
				<label for="number" class="control-label">{{ trans('addresses.fields.number') }}</label>
				<input id="number" name="number"  type="text" class="form-control"  value="{{$address->number }}">
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md">
			<div class="form-group">
				<label for="district" class="control-label">{{ trans('addresses.fields.district') }}</label>
				<input id="district" name="district"  type="text" class="form-control"  value="{{ $address->district }}">
			</div>
		</div>
		<div class="col-md">
			<div class="form-group">
				<label for="complement" class="control-label">{{ trans('addresses.fields.complement') }}</label>
				<input id="complement" name="complement"  type="text" class="form-control"  value="{{ $address->complement }}">
			</div>
		</div>
		<div class="col-md">
			<div class="form-group">
				<label for="name" class="control-label">{{ trans('addresses.fields.name') }}</label>
				<input id="name" name="name" type="text" class="form-control"  value="{{ $address->name }}">
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md">
			<div class="form-group">
				<label for="country_id" class="control-label">{{ trans('addresses.fields.country') }}*</label>
				<select name="country_id" id="country"  class="form-control" data-default="{{ $address->city->state->country->id }}" required></select>
			</div>
		</div>
		<div class="col-md">
			<div class="form-group">
				<label for="state_id" class="control-label">{{ trans('addresses.fields.state') }}*</label>
				<select name="state_id"  id="state" data-default="{{ $address->city->state->id }}"  class="form-control state" required></select>
			</div>
		</div>
		<div class="col-md">
			<div class="form-group">
				<label for="city_id" class="control-label">{{ trans('addresses.fields.city') }}*</label>
				<select name="city_id"  id="city" data-default="{{ $address->city->id }}"  class="form-control state" required></select>
			</div>
		</div>
	</div>
@endif

<div class="form-group">
	{{ Form::submit('Salvar', ['class' => 'btn btn-outline-success btn-sm']) }}
</div>