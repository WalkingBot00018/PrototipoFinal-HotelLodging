<h1>Editar cliente</h1>
<form method="POST" action="{{ route('customer.update', $clientes->id_cliente) }}">
    @csrf
    @method('PUT')

    <label for="">id del usuario: </label>
    <input type="text" name="id_usuario" value="{{ $clientes->id_cliente }}"/>

    <label for="">fecha de registro: </label>
    <input type="text" name="fecha_registro" value="{{ $clientes->fecha_registro }}"/>



    <button type="submit">Actualizar</button>
</form>
<a href="{{ route('customer.shows', $clientes->id_cliente) }}">Ver Detallesv</a>