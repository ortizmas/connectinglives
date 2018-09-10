@extends('layouts.admin.app')

@section('content')
    
    <div class="container-fluid pt-3">
        <div class="card card-default">
            <div class="card-header">
                <a class="float-right" href="{{ route('states.index') }}"><button class="btn btn-default">{{ trans('states.route-back') }}</button></a>
                <h3 class="card-title">{{ trans('states.states') }}</h3>
            </div>
            <div class="card-body">
                <form class="form-horizontal" method="POST" action="{{ route('states.update',$state->id) }}">
                    <input type="hidden" name="_method" value="PUT">
                    {{ csrf_field() }}

                    <div class="row">
                        <div class="col-md">
                            <div class="form-group">
                                <label for="code_iso2" class="control-label">{{ trans('states.fields.country') }}*</label>
                                <select name="country_id" id="country"  class="form-control" required>
                                    <option value=""> -- Selecionar Pais -- </option>
                                    @foreach ($countries as $country)
                                    <option value="{{ $country->id }}">{{ $country->name }}</option>
                                    @endforeach
                                    <option value="{{ $state->country->name }}" selected="">{{ $state->country->name }}</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group">
                                <label for="name" class="control-label">{{ trans('states.fields.ibge') }}*</label>
                                <input id="ibge" name="ibge" type="number" class="form-control"  value="{{ $state->ibge }}" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md">
                            <div class="form-group">
                                <label for="name" class="control-label">{{ trans('states.fields.code') }}*</label>
                                <input id="code" name="code" type="text" class="form-control"  value="{{ $state->code }}" maxlength="2" required>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group">
                                <label for="name" class="control-label">{{ trans('states.fields.name') }}*</label>
                                <input id="name" name="name" type="text" class="form-control"  value="{{ $state->name }}" required>
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-md-4">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary form-control">
                                    {{ trans('states.submit') }}
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
