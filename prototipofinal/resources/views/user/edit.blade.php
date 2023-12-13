<h1>Editar Usuario</h1>
<form method="POST" action="{{ route('user.update', $users->id) }}">
    @csrf
    @method('PUT')
    
    <label for="id_rol">Numero de rol:</label>
    <input type="text" name="id_rol" value="{{ $users->id_rol }}">

    <label for="tipo_doc">Tipo de Documento:</label>
    <input type="text" name="tipo_doc" value="{{ $users->tipo_doc }}">

    <label for="num_doc">Numero de Documento:</label>
    <input type="text" name="num_doc" value="{{ $users->num_doc }}">

    <label for="nombres">Nombres:</label>
    <input type="text" name="nombres" value="{{ $users->nombres }}">

    <label for="email">Email</label>
    <input type="text" name="email" value="{{ $users->email }}">

    <label for="apellido">Apellido:</label>
    <input type="text" name="apellido" value="{{ $users->apellido }}">

    <label for="telefono">Telefono:</label>
    <input type="text" name="telefono" value="{{ $users->telefono }}">

    <label for="nombre_usuario">Nombre de usuario:</label>
    <input type="text" name="nombre_usuario" value="{{ $users->nombre_usuario }}">

    <label for="password">password</label>
    <input type="password" name="password" value="{{ $users->password }}">
    

    <button type="submit">Actualizar</button>
</form>
<a href="{{ route('user.shows', $users->id) }}">Ver Detalles</a>

