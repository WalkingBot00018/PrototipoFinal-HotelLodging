@extends('layouts.app')

@section('content')

<body>
   <form action="{{ route('user.store') }}" method="post">
    @csrf
    
    @if (session('mensaje'))
        <h6>{{ session('mensaje') }}</h6>   
    @endif

    
    <input type="text" name="id_rol" id="" placeholder="id_rol:" value="{{ old('id_rol') }}">
    @error('id_rol')
        <h6>{{ $message }}</h6>
    @enderror
    <input type="text" name="tipo_doc" id="" placeholder="tipo_doc" value="{{ old('tipo_doc') }}">
    @error('tipo_doc')
        <h6>{{ $message }}</h6>
    @enderror
    <input type="text" name="num_doc" id="" placeholder="num_doc" value="{{ old('num_doc') }}">
    @error('num_doc')
        <h6>{{ $message }}</h6>
    @enderror
    <input type="text" name="nombres" id="" placeholder="nombres" value="{{ old('nombres') }}">
    @error('nombres')
        <h6>{{ $message }}</h6>
    @enderror
  
    <input type="email" name="email" id="" placeholder="Email" value="{{ old('email') }}">
    @error('email')
        <h6>{{ $message }}</h6>
    @enderror

    <input type="text" name="apellido" id="" placeholder="apellido" value="{{ old('apellido') }}">
    @error('apellido')
        <h6>{{ $message }}</h6>
    @enderror

    <input type="text" name="telefono" id="" placeholder="telefono" value="{{ old('telefono') }}">
    @error('telefono')
        <h6>{{ $message }}</h6>
    @enderror

    <input type="text" name="nombre_usuario" id="" placeholder="nombre_usuario" value="{{ old('nombre_usuario') }}">
    @error('nombre_usuario')
        <h6>{{ $message }}</h6>
    @enderror


    <input type="password" name="password" id="" placeholder="Password" value="{{ old('password') }}">

    @error('password')
        <h6>{{ $message }}</h6>
    @enderror


    <input type="submit" name="send" value="Send">

    </form> 
</body>

@endsection

</html>