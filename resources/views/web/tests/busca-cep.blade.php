@extends('layouts.app')

@section('content')
   <form action="checkout-sample" method="POST">
      CEP <input type="text" name="cep" id="cep" />
      Estado <input type="text" name="estado" id="estado" />
      Cidade <input type="text" name="cidade" id="cidade" />
      Bairro <input type="text" name="bairro" id="bairro" />
      Endereço <input type="text" name="endereco" id="endereco" />
   </form>
@endsection

@section('scripts')
<script type="text/javascript">
   jQuery(function($){
      $("#cep").change(function(){
         var cep_code = $(this).val();
         if( cep_code.length <= 0 ) return;
         $.get("http://apps.widenet.com.br/busca-cep/api/cep.json", { code: cep_code },
            function(result){
               if( result.status!=1 ){
                  alert(result.message || "Houve um erro desconhecido");
                  return;
               }
               $("input#cep").val( result.code );
               $("input#estado").val( result.state );
               $("input#cidade").val( result.city );
               $("input#bairro").val( result.district );
               $("input#endereco").val( result.address );
               $("input#estado").val( result.state );
            });
      });
   });
</script>
@endsection