<?php

namespace App\Http\Controllers\Admin;

use App\Specialtie;
use Illuminate\Http\Request;
use Validator;
use App\Http\Controllers\Controller;

class SpecialtieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $specialties = Specialtie::paginate();

    	return view('admin.specialties.index', compact('specialties'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.specialties.create', compact('specialties'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $specialtie = Specialtie::create($request->all());

        return redirect()->route('specialties.edit', $specialtie->id)->with('status', 'Especialidade cadastrada com sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Specialtie  $specialtie
     * @return \Illuminate\Http\Response
     */
    public function show(Specialtie $specialtie)
    {
        return view('admin.specialties.show', compact('specialtie'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Specialtie  $specialtie
     * @return \Illuminate\Http\Response
     */
    public function edit(Specialtie $specialtie)
    {
         return view('admin.specialties.edit', compact('specialtie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Specialtie  $specialtie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Specialtie $specialtie)
    {
        

        $specialtie->update($request->all());
        
       
        return redirect()->route('specialties.edit', $specialtie->id)->with('status', 'Especialidade alterada com sucesso');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Specialtie  $specialtie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Specialtie $specialtie)
    {
        $specialtie->delete();

       return back()->with('status', 'Essa especialidade foi excluida');
    }
    
    public function validator(array $data, $specialtie)
    {
        $messages = [
            'required' => 'O campo ":attribute" é obrigatório!',
            'min' => 'O campo ":attribute" deve ter no mínimo :min caracteres!',
            'max' => 'O campo ":attribute" deve ter no maximo :max caracteres!',
            
        ];

        $validator = Validator::make($data,[
            'name'    =>'required|min:3|max:45' ,
            'description' => ['required','max:255'], 
           
           
        ], $messages);

        return $validator;
        
        // if ($validator->fails()) {
        //     return redirect()->back()
        //         ->withErrors($validator)
        //         ->withInput();
        // }
    }
}
