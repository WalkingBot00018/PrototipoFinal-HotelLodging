<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index(){
        
        $empleados = Employee::with('users')->get();
        return view('employe.index', ['empleado' => $empleados]);
    }

    public function create()
    {
        return view("employe.create");
    }


    public function store(Request $request)
    {

        Employee::create($request->all());
        
        $empleado = Employee::with('users')->get();

        return redirect()->route("employe.index")->with("success","emple registrado exitosamente");
        
    }

    public function show($id)
{
    $empleados = Employee::find($id);

    if (!$empleados) {
        // Manejar el caso cuando el usuario no existe
        return redirect()->route('employe.index')->with('error', 'emple no encontrado');
    }

    return view('employe.shows', ['empleados' => $empleados]);
}

    public function edit($id)
    {
        $empleados = Employee::find($id);
        return view('employe.edit', compact('empleados'));
    }

    public function update(Request $request, $id)
    {
       

        // Actualiza el usuario
        Employee::where('id', $id)->update($request->except('_token', '_method'));

        return redirect('/empleado')->with('success', 'emple actualizado correctamente');
    }

        

    

public function destroy($id)
    {
        
        $empleados = Employee::find($id);
        $empleados->delete(); 
        return redirect('/empleado')->with('success', 'empole eliminado correctamente');
        
    }
}
