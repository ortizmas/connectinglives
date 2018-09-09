@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h3 class="card-title">Auto preenchimento de endereço via CEP</h3></div>

                <div class="card-body">
                    <form method="post" action="{{ route('cep.store') }}">
                        @csrf
                        <input name="postal_code" id="postal_code" data-autocomplete="true" data-mask="{{ config('states-and-cities.postal_code_mask') }}" type="text" }}">
                        <input id="street" >
                        <input id="district" >
                        <select name="country_id" id="country" data-default="{{ config('states-and-cities.default-country') }}"></select>
                        <select name="state_id" id="state" data-default="{{ config('states-and-cities.default-state') }}"></select>
                        <select name="city_id" id="city" data-default="{{ config('states-and-cities.default-city') }}"></select>

                        {{ $france }}

                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <!-- Adicionando Javascript -->
    <script src="//oss.maxcdn.com/jquery.mask/1.11.4/jquery.mask.min.js"></script>
    <script src="/vendor/StatesAndCities/js/blit-states-and-cities.js"></script>
    <script type="text/javascript" >

    </script>
@endsection