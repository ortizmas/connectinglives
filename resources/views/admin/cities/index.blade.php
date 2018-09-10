@extends('layouts.admin.app')

@section('content')
    <div class="container-fluid pt-3">
        <div class="card card-default">
            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif
            <div class="card-header">
                <a class="float-right" href="{{ route('cities.create') }}"><button class="btn btn-success">{{ trans('cities.new-register') }}</button></a>
                <h3 class="card-title">{{ trans('cities.cities') }}</h3>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>{{ trans('cities.table-header.code') }}</th>
                            <th>{{ trans('cities.table-header.name') }}</th>
                            <th>{{ trans('cities.table-header.state') }}</th>
                            <th>{{ trans('cities.table-header.country') }}</th>
                            <th>{{ trans('cities.action') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $obj)
                        <tr>
                            <td>{{ $obj->id }}</td>
                            <td>{{ $obj->code }}</td>
                            <td>{{ $obj->name }}</td>
                            <td>{{ $obj->state->code }}</td>
                            <td>{{ $obj->state->country->code_iso2 }}</td>
                            <td class="float-right">
                                <form action="{{ route('cities.destroy',$obj->id) }}" method="POST">
                                    <div class="btn-group btn-group-sm">
                                        <input type="hidden" name="_method" value="DELETE">
                                        {{ csrf_field() }}
                                        <button type="submit" class="btn btn-sm btn-danger">{{ trans('cities.delete') }}</button>
                                        <a href="{{ route('cities.edit',[$obj->id]) }}"><button type="button" class="btn btn-sm btn-info ml-2">{{ trans('cities.edit') }}</button></a>
                                    </div>
                                </form>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
                {!! $data->render() !!}
            </div>
        </div>
    </div>
@endsection
