@extends('layouts.admin.app')

@section('content')
    <div class="container-fluid pt-2">
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
                <a class="float-right" href="{{ route('addresses.create') }}"><button class="btn btn-success">{{ trans('addresses.new-register') }}</button></a>
                <h3 class="card-title">{{ trans('addresses.addresses') }}</h3>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>{{ trans('addresses.table-header.street') }}</th>
                            <th>{{ trans('addresses.table-header.number') }}</th>
                            <th>{{ trans('addresses.table-header.district') }}</th>
                            <th>{{ trans('addresses.table-header.postal_code') }}</th>
                            <th>{{ trans('addresses.table-header.city') }}</th>
                            <th>{{ trans('addresses.action') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $obj)
                        <tr>
                            <td>{{ $obj->id }}</td>
                            <td>
                                {{ $obj->street }}
                                @if($obj->name || $obj->complement)<br/>@endif
                                @if($obj->complement)<small>{{ $obj->complement }}</small>@endif
                                @if($obj->name)<small>*{{ $obj->name }}</small>@endif
                            </td>
                            <td>{{ $obj->number }}</td>
                            <td>{{ $obj->district }}</td>
                            <td>{{ $obj->postal_code }}</td>
                            <td>{{ $obj->city->name }}/{{ $obj->city->state->code }}</td>
                            <td class="float-right">
                                <form action="{{ route('addresses.destroy',$obj->id) }}" method="POST">
                                    <div class="btn-group btn-group-sm">
                                        <input type="hidden" name="_method" value="DELETE">
                                        {{ csrf_field() }}
                                        <button type="submit" class="btn btn-sm btn-danger">{{ trans('addresses.delete') }}</button>
                                        <a href="{{ route('addresses.edit',[$obj->id]) }}"><button type="button" class="btn btn-sm btn-info ml-2">{{ trans('addresses.edit') }}</button></a>
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
