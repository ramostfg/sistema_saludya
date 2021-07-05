
<br><h4>DATOS PERSONALES</h4>

<div class="row">
    <div class="form-group col-md-4">
        <label for="nombre" class="form-label">Nombres:</label>
        <input type="text" name="nombre" value="{{isset($persona->nombre)?$persona->nombre:''}}"class="form-control" id="nombre">
    </div>

    <div class="form-group col-md-4">
        <label for="apellido" class="form-label">Apellidos:</label>
        <input type="text" name="apellido" value="{{isset($persona->apellido)?$persona->apellido:''}}" class="form-control" id="apellido" >
    </div>

    <div class="form-group col-md-4">
        <label for="cedula" class="form-label">Cédula de Identidad:</label>
        <input type="text" class="form-control" id="cedula" name="cedula" value="{{isset( $persona->cedula)?$persona->cedula:'' }}">
    </div>

    <div class="form-group col-md-2">
        <label for="edad" class="form-label">Edad:</label>
        <input type="text" class="form-control" id="edad" name="edad" value="{{isset( $persona->edad)?$persona->edad:'' }}">
    </div>

    <div class="form-group col-md-4">
        <label for="fechanac" class="form-label">Fecha de Nacimiento:</label>
        <input type="date" class="form-control" name="fechanac" value="{{isset( $persona->fechanac)?$persona->fechanac:'' }}" id="fechanac">
    </div>
        
    <div class="form-group col-md-4">
        <label for="genero" class="form-label">Genero:</label>
        <input type="text" class="form-control" id="Genero" name="genero" value="{{isset( $persona->genero)?$persona->genero:'' }}">
    </div>

    <br><h4>DATOS DE CONTACTO</h4>
    <div class="form-group col-md-4">
        <label for="telefono" class="form-label">Teléfono de Casa:</label>
        <input type="text" class="form-control" id="telefono" name="telefono" value="{{isset( $persona->telefono)?$persona->telefono:'' }}">
    </div>

    <div class="form-group col-md-4">
        <label for="movil" class="form-label">Teléfono Movil:</label>
        <input type="text" class="form-control" id="movil" name="movil" value="{{isset( $persona->movil)?$persona->movil:'' }}">
    </div>

    <div class="form-group col-md-4">
        <label for="correo" class="form-label">Correo Electrónico:</label>
        <input type="email" class="form-control" id="correo" name="correo" value="{{isset( $persona->correo)?$persona->correo:'' }}">
    </div>

    <br><h4>DATOS DE PATRIA</h4>
    <div class="form-group col-md-4">
        <label for="serial" class="form-label">Serial del Carnet:</label>
        <input type="text" class="form-control" id="serial" name="serial" value="{{isset( $persona->serial)?$persona->serial:'' }}">
    </div>

    <div class="form-group col-md-4">
        <label for="codigo" class="form-label">Código de Carnet</label>
        <input type="text" class="form-control" id="codigo" name="codigo" value="{{isset( $persona->codigo)?$persona->codigo:'' }}">
    </div>
</div>

@include('../direccion.form')

@include('../patologia.form')

@include('../medicamento.form')

<div class="form-group row">
    <div class="col-md-12 ">
        <button type="submit" class="btn btn-primary">{{$modo}} REGISTRO</button>
        <a class="btn btn-dark" type="button"  href="{{ url('persona')}}">REGRESAR</a>
    </div>
</div>

