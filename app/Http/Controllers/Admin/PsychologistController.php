<?php

namespace App\Http\Controllers\Admin;

use App\Psychologist;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use App\People;

class PsychologistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $psychologists = Psychologist::paginate();

    	return view('admin.psychologists.index', compact('psychologists'));
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       // $especialidades = Specialtie::get()->pluck('name', 'id');
        
        //$niveis = Level::get();
        $method = 'CREATE';
        return view('admin.psychologists.create', compact('psychologists', 'especialidades','niveis', 'method'));
   
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Psychologist $psychologist)
    {
        //Validation
        $this->validator($request->all(), $psychologist)->validate();

        $request['people_id'] = People::id();
        $psychologist = Psychologist::create($request->all());

        $input = $request->all();
        $input['psychologist_id'] = $psychologist->id;
        

        return redirect()->route('psychologists.edit', $psychologist->id)->with('status', 'Psicólogo cadastrado com sucesso');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Psychologist  $psychologist
     * @return \Illuminate\Http\Response
     */
    public function show(Psychologist $psychologist)
    {
       // $especialidades = $psychologist->specialtie;
       // $niveis = $psychologist->level;
        
        return view('admin.psychologists.show', compact('psychologist', 'especialidades', 'niveis'));
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Psychologist  $psychologist
     * @return \Illuminate\Http\Response
     */
    public function edit(Psychologist $psychologist)
    {
        $method = 'EDIT';
       // $especialidades = Specialties::get()->pluck('name', 'id');
       // $niveis = Level::where('psychologist_id', $psychologist->id)->first();
        return view('admin.psychologists.edit', compact('psychologist', 'especialidades', 'niveis', 'method'));
 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Psychologist  $psychologist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Psychologist $psychologist)
    {
        $psychologist = Psychologist::findOrFail($psychologist->id);

        //Validation
        $this->validator($request->all(), $psychologist)->validate();

        $input = $request->all();
        $input['people_id'] = People::id();
        $psychologist->fill($input)->save();
        
       // $niveisId = Level::where('psychologist_id', $psychologist->id)->select('id')->first();
       // $niveis = Level::findOrFail($niveisId->id);
       // $niveis->fill($input)->save();
        return redirect()->route('psychologists.edit', $psychologist->id)->with('status', 'Psicólogo alterado com sucesso');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Psychologist  $psychologist
     * @return \Illuminate\Http\Response
     */
    public function destroy(Psychologist $psychologist)
    {
      $psychologist->delete();

      return back()->with('status', 'Esse psicólogo foi excluido');
    
    }
    
    public function validator(array $data, $people)
    {
        $messages = [
            'required' => 'O campo ":attribute" é obrigatório!',
            'crp.required' => 'O CRP é obrigatório!',
            'crp.unique' => 'Este CRP já está cadastrado!',            
            'min' => 'O campo ":attribute" deve ter no mínimo :min caracteres!',
            'max' => 'O campo ":attribute" deve ter no maximo :max caracteres!',
            'type.required' => 'O campo "tipo" é obrigatório!',
            'unique' => 'Este ":attribute" já se encontra cadastrado no sistema!',
            
           
        ];

        $validator = Validator::make($data, [
            'crp'    =>'required|min:3|max:20','unique' ,
            'therapeutic_approach' => ['required','max:255'], 
            'public' => ['required','max:45'],   
            
           
           
        ], $messages);

        return $validator;
        
        // if ($validator->fails()) {
        //     return redirect()->back()
        //         ->withErrors($validator)
        //         ->withInput();
        // }
    }
}
