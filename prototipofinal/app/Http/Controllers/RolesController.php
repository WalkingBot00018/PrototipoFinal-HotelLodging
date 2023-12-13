<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Roles;

class RolesController extends Controller
{
    public function index()
    {
        $rol = Roles::all();
        return view("role.index", compact("rol"));
    }


    public function create()
    {
        return view("role.create");
    }

    public function store(Request $request)
    {

        Roles::create($request->all());


        return redirect()->route("role.index")->with("success","rol exitoso");
    }

    public function show($id_rol)
{
    $roles = Roles::find($id_rol);

    if (!$roles) {
        // Manejar el caso cuando el usuario no existe
        return redirect()->route('role.index')->with('error', 'rol no encontrado');
    }

    return view('role.shows', ['roles' => $roles]);
}

    public function edit($id_rol)
    {
        $roles = Roles::find($id_rol);
        return view('role.edit', compact('roles'));
    }

    public function update(Request $request, $id_rol)
    {
       

        // Actualiza el usuario
        Roles::where('id_rol', $id_rol)->update($request->except('_token', '_method'));

        return redirect('/rol')->with('success', 'Rol actualizado correctamente');
    }

        

    

    public function destroy($id_rol)
        {
            
            $users = Roles::find($id_rol);
            $users->delete(); 
            return redirect('/rol')->with('success', 'Rol eliminado correctamente');
            
        }
}
