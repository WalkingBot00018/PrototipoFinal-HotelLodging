<link rel="stylesheet" href="{{ asset('css/role/create.css') }}"> 
<form method="post" action="{{ route('employe.store') }}" class="my-form">

    @csrf
    
    <div class="form-group">
        <label for="id_usuario">id del usuario:</label>
        <input type="text" name="id_usuario" id="id_usuario" class="form-control"/>
    </div>
    <div class="form-group">
        <label for="cargo">cargo:</label>
        <input type="text" name="cargo" id="cargo" class="form-control"/>
    </div>

    <div class="form-group">
        <label for="direccion_residencia">direccion de residencia:</label>
        <input type="text" name="direccion_residencia" id="direccion_residencia" class="form-control"/>
    </div>

    <div class="form-group">
        <label for="ingreso_basico">ingreso basico:</label>
        <input type="text" name="ingreso_basico" id="ingreso_basico" class="form-control"/>
    </div>

    <div class="form-group">
        <label for="fecha_ingreso">fecha de ingreso:</label>
        <input type="date" name="fecha_ingreso" id="fecha_ingreso" class="form-control"/>
    </div>

    <input type="submit" value="Create" class="btn btn-primary"/>

</form>