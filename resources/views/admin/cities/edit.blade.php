@extends('layouts.admin.app')

@section('content')
    <div class="container-fluid pt-3">
        <div class="card card-default">
            <div class="card-header">
                <a class="float-right" href="{{ route('cities.index') }}"><button class="btn btn-warning">{{ trans('cities.route-back') }}</button></a>
                <h3 class="card-title">{{ trans('cities.cities') }}</h3>
            </div>
            <div class="card-body">
                <form class="form-horizontal" method="POST" action="{{ route('cities.update',$city->id) }}">

                    <input type="hidden" name="_method" value="PUT">
                    {{ csrf_field() }}

                    <div class="row">
                        <div class="col-md">
                            <div class="form-group">
                                <label for="country_id" class="control-label">{{ trans('cities.fields.country') }}*</label>
                                <select name="country_id" id="country"  class="form-control" data-default="{{ $city->state->country->id }}" required></select>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group">
                                <label for="state_id" class="control-label">{{ trans('cities.fields.state') }}*</label>
                                <select name="state_id"  id="state" data-default="{{ $city->state->id }}"  class="form-control state" required></select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md">
                            <div class="form-group">
                                <label for="name" class="control-label">{{ trans('cities.fields.code') }}*</label>
                                <input id="code" name="code" type="text" class="form-control"  value="{{ $city->code }}" maxlength="2" required>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group">
                                <label for="name" class="control-label">{{ trans('cities.fields.name') }}*</label>
                                <input id="name" name="name" type="text" class="form-control"  value="{{ $city->name }}" required>
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-md-4">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary form-control">
                                    {{ trans('cities.submit') }}
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
