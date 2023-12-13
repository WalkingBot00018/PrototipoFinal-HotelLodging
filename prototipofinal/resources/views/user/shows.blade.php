@if ($user)
    <h1>USER DETAILS</h1>
    <p>id rol: {{ $user->id_rol }}</p>
    <p>tipo documento: {{ $user->tipo_doc }}</p>
    <p>numero de documento: {{ $user->num_doc }}</p>
    <p>nombres: {{ $user->nombres }}</p>
    <p>Email: {{ $user->email }}</p>
    <p>apellido: {{ $user->apellido }}</p>
    <p>telefono: {{ $user->telefono }}</p>
    <p>nombre de usuario: {{ $user->nombre_usuario }}</p>
    <p>Password: {{ $user->password }}</p>
    <a href="{{ route('user.index') }}">Volver al Listado</a>
@else
    <p>Usuario no encontrado</p>
@endif