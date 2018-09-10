<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Country;
use App\State;
use Illuminate\Http\Request;

class StateController extends Controller
{
    public function index()
    {
        $data = State::all();

        return view('admin.states.index',['data'=>$data]);
    }

    public function getList($country_id)
    {
        $data = State::byCountry($country_id)->get();

        return response()->json($data);
    }

    public function create()
    {
        $countries = Country::all();

        return view('admin.states.create',['countries'=>$countries]);
    }

    public function store(Request $request)
    {
        $input = $request->all();
        State::create($input);

        return redirect(route('states.index'))->with('status', 'Dados salvados com sucesso!!');
    }

    public function edit($id)
    {
        $state      = State::find($id);
        $countries  = Country::all();

        return view('admin.states.edit',['state'=>$state,'countries'=>$countries]);
    }

    public function update(Request $request, $id)
    {
        $input   = $request->all();
        $country = State::find($id);
        $country->update($input);

        return redirect(route('states.index'))->with('status', 'Dados alterados com sucesso!!');
    }

    public function destroy($id)
    {
        State::destroy($id);

        return redirect(route('states.index'));
    }
}