@extends('layouts.admin.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Pessoas</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    {!! Form::open(['route' => 'peoples.store']) !!}

                        @include('admin.peoples.partial.form', ['some' => 'data'])

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection