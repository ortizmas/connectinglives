@extends('layouts.admin.app')

@section('content')
    
    <div class="container-fluid pt-3">
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
                <a class="float-right" href="{{ route('states.create') }}"><button class="btn btn-success">{{ trans('states.new-register') }}</button></a>
                <h3 class="card-title">{{ trans('states.states') }}</h3>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>{{ trans('states.table-header.code') }}</th>
                            <th>{{ trans('states.table-header.name') }}</th>
                            <th>{{ trans('states.table-header.ibge') }}</th>
                            <th>{{ trans('states.table-header.cities') }}</th>
                            <th>{{ trans('states.table-header.country') }}</th>
                            <th>{{ trans('states.action') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $obj)
                        <tr>
                            <td>{{ $obj->id }}</td>
                            <td>{{ $obj->code }}</td>
                            <td>{{ $obj->name }}</td>
                            <td>{{ $obj->ibge }}</td>
                            <td>{{ $obj->cities()->count() }}</td>
                            <td>{{ $obj->country->code_iso2 }}</td>
                            <td>
                                <form action="{{ route('states.destroy',$obj->id) }}" method="POST">
                                    <div class="btn-group btn-group-sm">
                                        <input type="hidden" name="_method" value="DELETE">
                                        {{ csrf_field() }}
                                        <button type="submit" class="btn btn-sm btn-danger">{{ trans('states.delete') }}</button>
                                        <a href="{{ route('states.edit',[$obj->id]) }}"><button type="button" class="btn btn-sm btn-info ml-2">{{ trans('states.edit') }}</button></a>
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

@endsection
