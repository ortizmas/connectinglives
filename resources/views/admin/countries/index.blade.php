@extends('layouts.admin.app')

@section('content')
    <div class="container-fluid pt-4">
        <div class="card">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            <div class="card-header">
                <a class="btn btn-success float-right" href="{{ route('countries.create') }}">{{ trans('countries.new-register') }}</a>
                <h3 class="card-title">{{ trans('countries.countries') }}</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>{{ trans('countries.table-header.name') }}</th>
                                <th>{{ trans('countries.table-header.code_iso2') }}</th>
                                <th>{{ trans('countries.table-header.code_iso3') }}</th>
                                <th>{{ trans('countries.table-header.code_phone') }}</th>
                                <th>{{ trans('countries.table-header.lang') }}</th>
                                <th>{{ trans('countries.states') }}</th>
                                <th>{{ trans('countries.cities') }}</th>
                                <th>{{ trans('countries.action') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $obj)
                            <tr>
                                <td>{{ $obj->id }}</td>
                                <td>{{ trans('countries.country.'.$obj->name) }}</td>
                                <td>{{ $obj->code_iso2 }}</td>
                                <td>{{ $obj->code_iso3 }}</td>
                                <td>{{ $obj->code_phone }}</td>
                                <td>{{ $obj->lang }}</td>
                                <td>{{ $obj->states()->count() }}</td>
                                <td>{{ $obj->cities()->count() }}</td>
                                <td>
                                    <form action="{{ route('countries.destroy',$obj->id) }}" method="POST">
                                        <div class="btn-group btn-group-sm">
                                            <input type="hidden" name="_method" value="DELETE">
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-sm btn-danger">{{ trans('countries.delete') }}</button>
                                            <a href="{{ route('countries.edit',[$obj->id]) }}"><button type="button" class="btn btn-sm btn-info ml-2">{{ trans('countries.edit') }}</button></a>
                                        </div>
                                    </form>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
@endsection
