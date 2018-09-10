@extends('layouts.admin.app')

@section('content')
    <div class="container-fluid pt-4">
        <div class="card card-default">
            <div class="card-header">
                <a class="float-right" href="{{ route('countries.index') }}"><button class="btn btn-success">{{ trans('countries.route-back') }}</button></a>
                <h3 class="card-title">{{ trans('countries.countries') }}</h3>
            </div>
            <div class="card-body">
                <form class="form-horizontal" method="POST" action="{{ route('countries.update',$country->id) }}">

                    <input type="hidden" name="_method" value="PUT">
                    {{ csrf_field() }}

                    <div class="row">
                        <div class="col-md">
                            <div class="form-group">
                                <label for="code_iso2" class="control-label">{{ trans('countries.fields.code_iso2') }}*</label>
                                <input id="code_iso2" name="code_iso2" type="text" class="form-control" value="{{ $country->code_iso2 }}" maxlength="2" required>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group">
                                <label for="name" class="col-md-6 control-label">{{ trans('countries.fields.name') }}*</label>
                                <input id="name" name="name" type="text" class="form-control"  value="{{ $country->name }}" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <div class="form-group">
                                <label for="code_iso3" class="control-label">{{ trans('countries.fields.code_iso3') }}</label>
                                <input id="code_iso3" name="code_iso3" type="text" class="form-control" maxlength="3"  value="{{ $country->code_iso3 }}">
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group">
                                <label for="code_phome" class="control-label">{{ trans('countries.fields.code_phone') }}</label>
                                <input id="code_phone" name="code_phone" type="text" class="form-control"  value="{{ $country->code_phone }}">
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group">
                                <label for="lang" class="control-label">{{ trans('countries.fields.lang') }}</label>
                                <input id="lang" name="lang" type="text" class="form-control"  value="{{ $country->lang }}">
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="reset" name="Limpar" value="Limpar" placeholder="" class="btn btn-danger form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary form-control">
                                    {{ trans('countries.submit') }}
                                </button>
                            </div>
                        </div>
                    </div>

                    
                </form>
            </div>
        </div>
    </div>
@endsection
