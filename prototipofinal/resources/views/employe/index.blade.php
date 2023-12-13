@extends('layouts.app')

@section('content')
<a href="{{ route('employe.create') }}">Crear nuevo emple</a>

<table>
    <thead>
        <tr>
            <th>id del usuario</th>
            <th>cargo</th>
            <th>direccion de residencia</th>
            <th>ingreso basico</th>
            <th>fecha ingreso</th>
            <th>Usuario</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($empleado as $empleados)
            <tr>
                <td>{{ $empleados->id_usuario }}</td>
                <td>{{ $empleados->cargo }}</td>
                <td>{{ $empleados->direccion_residencia }}</td>
                <td>{{ $empleados->ingreso_basico }}</td>
                <td>{{ $empleados->fecha_ingreso }}</td>
                <td>{{ $empleados->users ? $empleados->users->nombre_usuario : 'sin nada' }}</td>
                <td>
                    <a href="{{ route('employe.shows', $empleados->id) }}">Ver</a>
                    <a href="{{ route('employe.edit', $empleados->id) }}">Editar</a>
                    <form method="POST" action="{{ route('employe.destroy', $empleados->id) }}">
                        @csrf
                        @method('DELETE')
                        <input type="submit" class="btn btn-danger btn-sm" value="Eliminar">
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="6">No hay datos</td>
            </tr>
        @endforelse
    </tbody>
</table>

@endsection