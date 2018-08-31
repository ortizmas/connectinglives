<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use App\User;
use Caffeinated\Shinobi\Models\Role;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::paginate();
        return view('admin.users.index', compact('users'));
    }

    public function create()
    { 
        $breadcrumb_title = 'Novo Usuario';
        $roles = Role::get();
        return view('admin.users.create', compact('roles', 'breadcrumb_title'));
    }

    protected function validator(array $data, $user)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => [
                'required','string', 'email','max:255',
                Rule::unique('users')->ignore($user->id),
            ],
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    public function store(Request $request)
    {

        $this->validator($request->all())->validate();
        $this->createUser($request->all());

        return redirect()->route('users.index')->with('status', 'Usuario cadastrado!!');
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function createUser(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('admin.users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $roles = Role::get();
        return view('admin.users.edit', compact('user', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //Alterar Usuarios
        $user->update($request->all());
        
        //Alterar roles
        $user->roles()->sync($request->get('roles'));
        
        return redirect()->route('users.index')
            ->with('status', 'Usuario com id ' . $user->id . ' alterado com sucesso');
    }

    public function perfil(User $user)
    {
        return view('admin.users.edit-user', compact('user'));
    }

    public function perfilUpdate(Request $request, User $user)
    {
        $this->validator($request->all(), $user)->validate();
        $user = User::find($user->id);
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->password = Hash::make($request['password']);
        $user->update();

        return redirect()->route('users.perfil', $user->id)->with('status', 'Usuario alterado com sucesso!!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return back()->with('status', 'O usuario foi excluido');
    }
}
