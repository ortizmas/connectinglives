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
                        <select id="uf" default="MG"></select>
                        <select id="cidade"></select>
                        <button type="submit">Salvar</button>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <!-- Adicionando Javascript -->
    <script src="{{ asset('vendor/artesaos/cidades/js/scripts.js') }}"></script>
    <script type="text/javascript" >
        // (function ( $ ) {
        //     $.fn.ufs = function(options) {
        //         var select = $(this);
        //         var settings = $.extend({
        //             'default': select.attr('default'),
        //             'onChange': function(uf){}
        //         }, options );
        //         $.get("/ufs", null, function (json) {
        //             $.each(json, function (key, value) {
        //                 select.append('<option value="' + value.uf + '" '+(settings.default==value.uf?'selected':'')+'>' + value.uf + '</option>');
        //             })
        //             settings.onChange(select.val());
        //         }, 'json');
        //         select.change(function(){
        //             settings.onChange(select.val());
        //         });
        //     };

        //     $.fn.cidades = function(options) {
        //         var select = $(this);
        //         var settings = $.extend({
        //             'default': select.attr('default'),
        //             'uf': null
        //         }, options );
        //         if(settings.uf == null)
        //             console.warn('Nenhuma UF informada');
        //         else{
        //             select.html('<option>Carregando..</option>');
        //             $.get("/cidades/"+settings.uf, null, function (json) {
        //                 select.html('<option value="">Selecione</option>');
        //                 $.each(json, function (key, value) {
        //                     select.append('<option value="' + value.id + '" '+((settings.default==value.id || settings.default==value.nome)?'selected':'')+'>' + value.nome + '</option>');
        //                 })

        //             }, 'json');
        //         }
        //     };

        // }( jQuery ));
        $('#uf').ufs({
            onChange: function(uf){
                $('#cidade').cidades({uf: uf});
            }
        });
    </script>
@endsection