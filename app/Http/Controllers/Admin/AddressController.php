<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Address;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    public function index()
    {
        $data = Address::paginate(100);
        return view('admin.addresses.index',['data'=>$data]);
    }

    public function create()
    {
        return view('admin.addresses.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        Address::create($input);

        return redirect(route('addresses.index'))->with('status', 'Dados salvados com sucesso!!');
    }

    public function edit($id)
    {
        $address      = Address::find($id);

        return view('admin.addresses.edit',['address'=>$address]);
    }

    public function update(Request $request, $id)
    {
        $input   = $request->all();
        $address = Address::find($id);
        $address->update($input);

        return redirect(route('addresses.index'))->with('status', 'Dados alterados com sucesso!!');
    }

    public function destroy($id)
    {
        Address::destroy($id);
        return redirect(route('addresses.index'));
    }
}