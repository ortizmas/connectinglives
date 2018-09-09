<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//use PragmaRX\Countries\Package\Countries;

class TestController extends Controller
{
    public function getEnderecoViaCep()
    {
    	return view('web.tests.endereco-via-cep');
    }

    public function store(Request $request)
    {
    	dd($request);
    }

    public function getEnderecoViaCepAjax()
    {
    	return view('web.tests.endereco-via-cep-ajax');
    }

    public function getViaCepAjax(Request $request)
    {
    	$cep = $request['cep'];
 
		$reg = simplexml_load_file("http://cep.republicavirtual.com.br/web_cep.php?formato=xml&cep=" . $cep);
		 
		$dados['sucesso'] = (string) $reg->resultado;
		$dados['rua']     = (string) $reg->tipo_logradouro . ' ' . $reg->logradouro;
		$dados['bairro']  = (string) $reg->bairro;
		$dados['cidade']  = (string) $reg->cidade;
		$dados['estado']  = (string) $reg->uf;
		 
		echo json_encode($dados);
    }

    public function storeAjax(Request $request)
    {
    	dd($request);
    }

    public function location()
    {
		dd('tes');
    	//$france = Countries::where('name.common', 'France');
    	return view('web.tests.locations', compact('fance'));
    }
}
