<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Customers;

class CustomersController extends Controller
{
    public function index(){
        
        $clientes = Customers::with('users')->get();
        return view('customer.index', ['cliente' => $clientes]);
    }

    public function create()
    {
        return view("customer.create");
    }


    public function store(Request $request)
    {

        Customers::create($request->all());
        
        $cliente = Customers::with('users')->get();

        return redirect()->route("customer.index")->with("success","clientes registrado exitosamente");
        
    }

    public function show($id_cliente)
{
    $clientes = Customers::find($id_cliente);

    if (!$clientes) {
        // Manejar el caso cuando el usuario no existe
        return redirect()->route('customer.index')->with('error', 'rol no encontrado');
    }

    return view('customer.shows', ['clientes' => $clientes]);
}

    public function edit($id_cliente)
    {
        $clientes = Customers::find($id_cliente);
        return view('customer.edit', compact('clientes'));
    }

    public function update(Request $request, $id_cliente)
    {
       

        // Actualiza el usuario
        Customers::where('id_cliente', $id_cliente)->update($request->except('_token', '_method'));

        return redirect('/cliente')->with('success', 'Usuario actualizado correctamente');
    }

        

    

public function destroy($id_cliente)
    {
        
        $clientes = Customers::find($id_cliente);
        $clientes->delete(); 
        return redirect('/cliente')->with('success', 'cliente eliminado correctamente');
        
    }
}