@extends('layouts.admin.app')

@section('content')
    <div class="container-fluid mt-2">
        <div class="card card-default">
            <div class="card-header">
                <a class="float-right" href="{{ route('addresses.index') }}"><button class="btn btn-warning">{{ trans('addresses.route-back') }}</button></a>
                <h3 class="card-title">{{ trans('addresses.addresses') }}</h3>
            </div>
            <div class="card-body">
                <form class="form-group" method="POST" action="{{ route('addresses.store') }}">
                    {{ csrf_field() }}

                    <div class="row">
                        <div class="col-md">
                            <div class="form-group">
                                <label for="postal_code" class="control-label">{{ trans('addresses.fields.postal_code') }}</label>
                                <input id="postal_code" name="postal_code" data-autocomplete="true" data-mask="{{ config('states-and-cities.postal_code_mask') }}" type="text" class="form-control"  value="{{ old('postal_code') }}">
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group">
                                <label for="street" class="control-label">{{ trans('addresses.fields.street') }}</label>
                                <input id="street" name="street"  type="text" class="form-control"  value="{{ old('street') }}">
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group">
                                <label for="number" class="control-label">{{ trans('addresses.fields.number') }}</label>
                                <input id="number" name="number"  type="text" class="form-control"  value="{{ old('number') }}">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md">
                            <div class="form-group">
                                <label for="district" class="control-label">{{ trans('addresses.fields.district') }}</label>
                                <input id="district" name="district"  type="text" class="form-control"  value="{{ old('district') }}">
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group">
                                <label for="complement" class="control-label">{{ trans('addresses.fields.complement') }}</label>
                                <input id="complement" name="complement"  type="text" class="form-control"  value="{{ old('complement') }}">
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group">
                                <label for="name" class="control-label">{{ trans('addresses.fields.name') }}</label>
                                <input id="name" name="name" type="text" class="form-control"  value="{{ old('name') }}">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md">
                            <div class="form-group">
                                <label for="country_id" class="control-label">{{ trans('addresses.fields.country') }}*</label>
                                <select name="country_id" id="country"  class="form-control" data-default="{{ config('states-and-cities.default-country') }}" required></select>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group">
                                <label for="state_id" class="control-label">{{ trans('addresses.fields.state') }}*</label>
                                <select name="state_id"  id="state" data-default="{{ config('states-and-cities.default-state') }}"  class="form-control state" required></select>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group">
                                <label for="city_id" class="control-label">{{ trans('addresses.fields.city') }}*</label>
                                <select name="city_id"  id="city" data-default="{{ config('states-and-cities.default-city') }}"  class="form-control state" required></select>
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-md-4">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary form-control">
                                    {{ trans('addresses.submit') }}
                                </button>
                            </div>
                        </div>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="//oss.maxcdn.com/jquery.mask/1.11.4/jquery.mask.min.js"></script>
    <script src="{{ asset('js/states-and-cities.js') }}" type="text/javascript" charset="utf-8"></script>
@endsection
