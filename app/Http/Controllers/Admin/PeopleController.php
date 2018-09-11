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

    public function create()
    {
        $cursos = Course::get()->pluck('name', 'id');
        $address = Address::find(1)->first();
        return view('admin.peoples.create', compact('peoples', 'cursos', 'address'));
    }

    public function store(Request $request, People $people)
    {

        //Validation
        $this->validator($request->all(), $people)->validate();

        $request['user_id'] = Auth::id();
        $request['course_id'] = 1;
        $request['city_id'] = 1;


        $people = People::create($request->all());
        return redirect()->route('peoples.edit', $people->id)->with('status', 'Pessoa cadastrada com sucesso');
    
    }

    public function show(People $people)
    {
        return view('admin.peoples.show', compact('people'));
    }

    public function edit(People $people)
    {
        $cursos = Course::get()->pluck('name', 'id');
        $address = Address::find(1)->first();
        return view('admin.peoples.edit', compact('people', 'cursos', 'address'));
    }

    public function update(Request $request, People $people)
    {
        $people = People::findOrFail($people->id);

        //Validation
        $this->validator($request->all(), $people)->validate();

        $input = $request->all();
        $input['user_id'] = Auth::id();
        $input['course_id'] = 1;
        $input['city_id'] = 1;

        $people->fill($input)->save();
        
        //$people = People::create($request->all());
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
           'email.required' => 'O E-mail é obrigatório!',
           'email.unique' => 'Este email já está cadastrado!',
           'cpf.unique' => 'Este CPF já está cadastrado!',
           'numeric' => 'O campo ":attribute" deve ser um número!',
           'min' => 'O campo ":attribute" deve ter no mínimo :min caracteres!',
           'max' => 'O campo ":attribute" deve ter no maximo :max caracteres!',
           'type.required' => 'O campo "tipo" é obrigatório!',
           'unique' => 'Este ":attribute" já se encontra cadastrado no sistema!',
            'cpf'=> 'Esse cpf é inválido!',
           
        ];

        $validator = Validator::make($data, [
          'email' => [
            'bail','required','max:255','email',
            Rule::unique('peoples')->ignore($people->id),
            
          ], 
          'cpf' => [
            'bail',
            'required',
             
            'max:14',
             ], 
          'full_name'    =>'required|min:3|max:100',           
          'data_of_birth' => 'required|date',
          'phone'   =>'required',
          //'cep'     =>'required',
          // 'state_id'   =>'required',
          // 'city_id' =>'required',
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
