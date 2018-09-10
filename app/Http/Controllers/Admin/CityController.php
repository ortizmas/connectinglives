<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function index()
    {
        $data = City::paginate(100);
        return view('admin.cities.index',['data'=>$data]);
    }

    public function getList($state_id)
    {
        $data = City::byState($state_id)->get();

        return response()->json($data);
    }

    public function create()
    {
        return view('admin.cities.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        City::create($input);

        return redirect(route('cities.index'))->with('status', 'Dados salvados com sucesso!!');
    }

    public function edit($id)
    {
        $city      = City::find($id);

        return view('admin.cities.edit',['city'=>$city]);
    }

    public function update(Request $request, $id)
    {
        $input   = $request->all();
        $country = City::find($id);
        $country->update($input);

        return redirect(route('cities.index'))->with('status', 'Dados alterados com sucesso!!');
    }

    public function destroy($id)
    {
        City::destroy($id);
        return redirect(route('cities.index'));
    }
}