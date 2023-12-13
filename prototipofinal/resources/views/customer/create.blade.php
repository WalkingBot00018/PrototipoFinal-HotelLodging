@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/cliente.css') }}"> 
<a href="{{ route('customer.index') }}" class="btn btn-secondary">regresar</a>
<form method="post" action="{{ route('customer.store') }}">

    @csrf
    
    <label for="">id del usuario: </label>
    <input type="text" name="id_usuario"/>

    <label for="">fecha de registro: </label>
    <input type="text" name="fecha_registro"/>

    <input type="submit" value="Create" class="btn btn-primary"/>

</form>

@endsection