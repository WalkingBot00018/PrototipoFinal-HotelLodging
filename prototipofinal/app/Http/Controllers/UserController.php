<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        return view('user.index', ['users'=>$users]);
    }

    public function create()
    {
        return view("user.create");
    }


    public function store(Request $request)
    {

        User::create($request->all());
        
        $users = User::with('roles')->get();

        return redirect()->route("user.index")->with("success","usuario registrado exitosamente");
        
    }
    public function show($id_usuario)
{
    $user = User::find($id_usuario);

    if (!$user) {
        // Manejar el caso cuando el usuario no existe
        return redirect()->route('user.index')->with('error', 'Usuario no encontrado');
    }

    return view('user.shows', ['user' => $user]);
}


public function edit($id_usuario)
    {
        $users = User::find($id_usuario);
        return view('user.edit', compact('users'));
    }

    public function update(Request $request, $id_usuario)
    {
       

        // Actualiza el usuario
        User::where('id_usuario', $id_usuario)->update($request->except('_token', '_method'));

        return redirect('/usuarios')->with('success', 'Usuario actualizado correctamente');
    }

        

    

public function destroy($id_usuario)
    {
        
        $users = User::find($id_usuario);
        $users->delete(); 
        return redirect('/usuarios')->with('success', 'Usuario eliminado correctamente');
        
    }
}
