<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Country;

class CountryController extends Controller {

    public function index()
    {
        $data = Country::all();

        return view('admin.countries.index',['data'=>$data]);
    }

    public function getList()
    {
        $data = Country::all();

        return response()->json($data);
    }

    public function create()
    {
        return view('admin.countries.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        Country::create($input);

        return redirect(route('countries.index'))->with('status', 'Dasos salvado com sucesso!!');
    }

    public function edit($id)
    {
        $country = Country::find($id);

        return view('admin.countries.edit',['country'=>$country]);
    }

    public function update(Request $request, $id)
    {
        $input = $request->all();
        $country = Country::find($id);
        $country->update($input);

        return redirect(route('countries.index'))->with('status', 'Dasos alterado com sucesso!!');
    }

    public function destroy($id)
    {
        Country::destroy($id);

        return redirect(route('countries.index'));
    }

}