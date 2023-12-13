@if ($empleados)
<link rel="stylesheet" href="{{ asset('css/role/show.css') }}"> 
    <h1>employee DETAILS</h1>
    <p>id del usuario: {{ $empleados->id_usuario }}</p>
    <p>cargo: {{ $empleados->cargo }}</p>
    <p>direccion de la residencia: {{ $empleados->direccion_residencia }}</p>
    <p>ingreso basico: {{ $empleados->ingreso_basico }}</p>
    <p>fecha de ingreso: {{ $empleados->fecha_ingreso }}</p>
    
    <a href="{{ route('employe.index') }}">Volver al Listado</a>
@else
    <p>Rol no encontrado</p>
@endif