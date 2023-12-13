<h1>Editar Rol</h1>
<form method="POST" action="{{ route('employe.update', $empleados->id) }}">
<link rel="stylesheet" href="{{ asset('css/role/edit.css') }}"> 
    @csrf
    @method('PUT')
    <label for="id_usuario">id del usuario</label>
    <input type="text" name="id_usuario" value="{{ $empleados->id_usuario }}">

    <label for="cargo">cargo</label>
    <input type="text" name="cargo" value="{{ $empleados->cargo }}">

    <label for="direccion_residencia">direccion de la residencia</label>
    <input type="text" name="direccion_residencia" value="{{ $empleados->direccion_residencia }}">

    <label for="ingreso_basico">ingreso basico</label>
    <input type="text" name="ingreso_basico" value="{{ $empleados->ingreso_basico }}">

    <label for="fecha_ingreso">fecha de ingreso</label>
    <input type="text" name="fecha_ingreso" value="{{ $empleados->fecha_ingreso }}">

    <button type="submit">Actualizar</button>
    <a href="{{ route('role.shows', $empleados->id) }}">Ver Detalles</a>
</form>