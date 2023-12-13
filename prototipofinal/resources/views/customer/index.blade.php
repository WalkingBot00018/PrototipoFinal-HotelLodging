@extends('layouts.app')

@section('content')
<a href="{{ route('customer.create') }}">Crear nuevo cliente</a>

<table>
    <thead>
        <tr>
            <th>id del usuario</th>
            <th>fecha de registro</th>
            <th>Usuario</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($cliente as $clientes)
            <tr>
                <td>{{ $clientes->id_usuario }}</td>
                <td>{{ $clientes->fecha_registro }}</td>
                <td>{{ $clientes->users ? $clientes->users->nombre_usuario : 'sin nada' }}</td>
                <td>
                    <a href="{{ route('customer.shows', $clientes->id_cliente) }}">Ver</a>
                    <a href="{{ route('customer.edit', $clientes->id_cliente) }}">Editar</a>
                    <form method="POST" action="{{ route('customer.destroy', $clientes->id_cliente) }}">
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