@if ($clientes)
    <h1>client DETAILS</h1>
    <p>id del usuario: {{ $clientes->id_usuario }}</p>
    <p>fecha de registro: {{ $clientes->fecha_registro }}</p>  
    <a href="{{ route('customer.index') }}">Volver al Listado</a>
@else
    <p>cliente no encontrado</p>
@endif