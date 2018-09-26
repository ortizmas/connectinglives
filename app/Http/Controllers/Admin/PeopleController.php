<?php

namespace App\Http\Controllers\Admin;

use App\Address;
use App\People;
use App\Course;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Validator;
use Illuminate\Validation\Rule;
use DataTables;


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

    	return DataTables::of(People::query())->make(true);
    }

    public function create()
    {
        $cursos = Course::get()->pluck('name', 'id');
        //$address = Address::find(1)->first();
        $address = Address::get();
        $method = 'CREATE';
        return view('admin.peoples.create', compact('peoples', 'cursos', 'address', 'method'));
    }

    public function store(Request $request, People $people)
    {

        //Validation
        $this->validator($request->all(), $people)->validate();

        $request['user_id'] = Auth::id();
        $people = People::create($request->all());

        $input = $request->all();
        $input['people_id'] = $people->id;
        Address::create($input);

        return redirect()->route('peoples.edit', $people->id)->with('status', 'Pessoa cadastrada com sucesso');
    
    }

    public function show(People $people)
    {
        $address = $people->address;
        $cidade = $address->city;
        $estado = $cidade->state;
        $pais = $estado->country;
        return view('admin.peoples.show', compact('people', 'cidade', 'estado', 'pais'));
    }

    public function edit(People $people)
    {
        $method = 'EDIT';
        $cursos = Course::get()->pluck('name', 'id');
        $address = Address::where('people_id', $people->id)->first();
        return view('admin.peoples.edit', compact('people', 'cursos', 'address', 'method'));
    }

    public function update(Request $request, People $people)
    {
        $people = People::findOrFail($people->id);

        //Validation
        $this->validator($request->all(), $people)->validate();

        $input = $request->all();
        $input['user_id'] = Auth::id();
        $people->fill($input)->save();
        
        $addressId = Address::where('people_id', $people->id)->select('id')->first();
        $address = Address::findOrFail($addressId->id);
        $address->fill($input)->save();
        return redirect()->route('peoples.edit', $people->id)->with('status', 'Pessoa alterado com sucesso');
    
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

    public function validator(array $data, $people)
    {
        $messages = [
            'required' => 'O campo ":attribute" é obrigatório!',
            'full_name.required' => 'Seu nome completo é obrigatório',
            'email.required' => 'O E-mail é obrigatório!',
            'email.unique' => 'Este email já está cadastrado!',
            'data_of_birth.required' => 'Sua data de nacimento é obrigatório',
            'phone.required' => 'Sua telefone é obrigatório',
            'postal_code.required' => 'Sua CEP é obrigatório',
            'state_id.required' => 'Selecione seu estado',
            'city_id.required' => 'Selecione sua cidade',
            'cpf.unique' => 'Este CPF já está cadastrado!',
            'numeric' => 'O campo ":attribute" deve ser um número!',
            'min' => 'O campo ":attribute" deve ter no mínimo :min caracteres!',
            'max' => 'O campo ":attribute" deve ter no maximo :max caracteres!',
            'type.required' => 'O campo "tipo" é obrigatório!',
            'unique' => 'Este ":attribute" já se encontra cadastrado no sistema!',
            'cpf'=> 'Esse cpf é inválido!',
           
        ];

        $validator = Validator::make($data, [
            'full_name'    =>'required|min:3|max:100', 
            'email' => ['bail','required','max:255','email',Rule::unique('peoples')->ignore($people->id)], 
            'cpf' => ['bail','required', 'cpf','max:14'],   
            'data_of_birth' => 'required|date',
            'phone'   =>'required',
            'postal_code'     =>'required',
            'state_id'   =>'required',
            'city_id' =>'required',
            // 'street'  =>'required',
            // 'number'  =>'required',
            // 'neighborhood' =>'required',
            // 'complement'   =>'required',
            //'status'  =>'required'
        ], $messages);

        return $validator;
        
        // if ($validator->fails()) {
        //     return redirect()->back()
        //         ->withErrors($validator)
        //         ->withInput();
        // }
    }
}
