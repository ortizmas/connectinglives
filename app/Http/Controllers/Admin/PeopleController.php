<?php

namespace App\Http\Controllers\Admin;

use App\People;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PeopleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peoples = People::paginate();
    	return view('admin.peoples.index', compact('peoples'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.peoples.create', compact('peoples'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, People $peoples)
    {
     $messages = [
       'required' => 'O campo ":attribute" é obrigatório!',
       'email.unique' => 'Este email já está cadastrado!',
       'cpf.unique' => 'Este CPF já está cadastrado!',
       'numeric' => 'O campo ":attribute" deve ser um número!',
       'min' => 'O campo ":attribute" deve ter no mínimo :min caracteres!',
       'max' => 'O campo ":attribute" deve ter no maximo :max caracteres!',
       'type.required' => 'O campo "tipo" é obrigatório!',
       'unique' => 'Este ":attribute" já se encontra cadastrado no sistema!',
        'cpf'=> 'Esse cpf é inválido!',
       
     ];

     $validator = \Validator::make($request->all(), [
      'email' => [
        'bail',
        'required',
        'max:255',
        
      ], 
      'cpf' => [
        'bail',
        'required',
         
        'max:14',
         ], 
      'name'    =>'required|min:3|max:100',           
      'data_of_birth' => 'required|date',
      'phone'   =>'required',
      'cep'     =>'required',
      'state_id'   =>'required',
      'city_id' =>'required',
      'street'  =>'required',
      'number'  =>'required',
      'neighborhood' =>'required',
      'complement'   =>'required',
      'status'  =>'required'
    ], $messages);

     if ($validator->fails()) {

      return redirect()->back()
      ->withErrors($validator)
      ->withInput();

    }

      $people = People::create($request->all());

      return redirect()->route('peoples.edit', $people->id)->with('status', 'Pessoa cadastrada com sucesso');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\People  $people
     * @return \Illuminate\Http\Response
     */
    public function show(People $people)
    {
        return view('admin.peoples.show', compact('people'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\People  $people
     * @return \Illuminate\Http\Response
     */
    public function edit(People $people)
    {
        return view('admin.peoples.edit', compact('people'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\People  $people
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, People $people)
    {
        $messages = [
       'required' => 'O campo ":attribute" é obrigatório!',
       'email.unique' => 'Este email já está cadastrado!',
       'cpf.unique' => 'Este CPF já está cadastrado!',
       'numeric' => 'O campo ":attribute" deve ser um número!',
       'min' => 'O campo ":attribute" deve ter no mínimo :min caracteres!',
       'max' => 'O campo ":attribute" deve ter no maximo :max caracteres!',
       'type.required' => 'O campo "tipo" é obrigatório!',
       'unique' => 'Este ":attribute" já se encontra cadastrado no sistema!',
        'cpf'=> 'Esse cpf é inválido!',
       
     ];

     $validator = \Validator::make($request->all(), [
      'email' => [
        'bail',
        'required',
        'max:255',
       
      ], 
      'cpf' => [
        'bail',
        'required',
          
        'max:14',
       
      ], 
      'name'    =>'required|min:3|max:100',           
      'data_of_birth' => 'required|date',
      'phone'   =>'required',
      'cep'     =>'required',
      'state_id'   =>'required',
      'city_id' =>'required',
      'street'  =>'required',
      'number'  =>'required',
      'neighborhood' =>'required',
      'complement'   =>'required',
      'status'  =>'required'
    ], $messages);

     if ($validator->fails()) {

      return redirect()->back()
      ->withErrors($validator)
      ->withInput();

    }

      $people = People::create($request->all());

      return redirect()->route('peoples.edit', $people->id)->with('status', 'Pessoa cadastrada com sucesso');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\People  $people
     * @return \Illuminate\Http\Response
     */
    public function destroy(People $people)
    {
      $people->delete();

      return back()->with('status', 'Essa pessoa foi excluida');
    
    }
}
