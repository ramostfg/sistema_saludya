
<div class="container">
    <br><h3>DATOS PERSONALES</h3><br>
        <div class="row mb-3">
            <label for="nombre" class="col-sm-2 col-form-label">Nombres:</label>
            <div class="col-sm-10">
                <input type="text" name="nombre" value="{{isset($persona->nombre)?$persona->nombre:''}}" class="form-control" placeholder="Ej: Ana Maria" id="nombre">
            </div>
        </div>
                                        
        <div class="row mb-3">
            <label for="apellido" class="col-sm-2 col-form-label">Apellidos:</label>
            <div class="col-sm-10">
                <input type="text" name="apellido" value="{{isset( $persona->apellido)?$persona->apellido:'' }}" class="form-control" placeholder="Ej: Acosta Marin" id="apellido">
            </div>
        </div>

        <div class="row mb-3">
            <label for="cedula" class="col-sm-2 col-form-label"> Cédula de Identidad:</label>
            <div class="col-sm-10">
                <input type="text" name="cedula" value="{{isset( $persona->cedula)?$persona->cedula:'' }}" class="form-control" placeholder="Ej: V-12333444" id="cedula">                </div>
            </div>
        </div>
    
        <div class="row mb-3">
            <label for="edad" class="col-sm-2 col-form-label">Edad:</label>
            <div class="col-sm-10">
                <input type="text" name="edad" value="{{isset( $persona->edad)?$persona->edad:'' }}" class="form-control" placeholder="Ej: 65" id="edad">
            </div>
        </div>

        <div class="row mb-3">
            <label for="fechanac" class="col-sm-2 col-form-label">Fecha de Nacimiento:</label>
            <div class="col-sm-10">
                    <input type="date" name="fechanac" value="{{isset( $persona->fechanac)?$persona->fechanac:'' }}" class="form-control" placeholder="Ej: 23-11-1956" id="fechanac">
            </div>
        </div>
            
        <div class="row mb-3">
            <label for="genero" class="col-sm-2 col-form-label">Genero:</label>
            <div class="col-sm-10">
                    <input type="text" name="genero" value="{{isset( $persona->genero)?$persona->genero:'' }}" class="form-control" placeholder="Ej: Masculino o Femenino" id="genero">
            </div>
        </div>

    <br><h3>DATOS DE CONTACTO</h3><br>
        <div class="row mb-3">
            <label for="telefono" class="col-sm-2 col-form-label">Teléfono de Casa:</label>
            <div class="col-sm-10">
                <input type="text" name="telefono" value="{{isset( $persona->telefono)?$persona->telefono:'' }}" class="form-control" placeholder="Ej: 0269-2510000" id="telefono">
            </div>
        </div>

        <div class="row mb-3">
            <label for="movil" class="col-sm-2 col-form-label">Teléfono Móvil:</label>
            <div class="col-sm-10">
                <input type="text" name="movil" value="{{isset( $persona->movil)?$persona->movil:'' }}" class="form-control" placeholder="Ej: 0416-6760000" id="movil">
            </div>
        </div>

        <div class="row mb-3">
            <label for="correo" class="col-sm-2 col-form-label">Correo Electrónico:</label>
            <div class="col-sm-10">
                <input type="text" name="correo" value="{{isset( $persona->correo)?$persona->correo:'' }}" class="form-control" placeholder="Ej: anamaria@salud.com" id="correo">
            </div>
        </div>

    <br><h3>DATOS SISTEMA PATRIA</h3><br>                             
        <div class="row mb-3">
            <label for="serial" class="col-sm-2 col-form-label">Serial:</label>
            <div class="col-sm-10">
                <input type="text" name="serial" value="{{isset( $persona->serial)?$persona->serial:'' }}" class="form-control" placeholder="Ej: 0000900001" id="serial">
            </div>
        </div>
        
        <div class="row mb-3">
            <label for="codigo" class="col-sm-2 col-form-label">Código:</label>
            <div class="col-sm-10">
                <input type="text" name="codigo" value="{{isset( $persona->codigo)?$persona->codigo:'' }}" class="form-control" placeholder="Ej: 0000800001" id="codigo">
            </div>
        </div>


    <br><h3>DATOS DE HABITACIÓN</h3><br>
        <div class="row mb-3">
            <label for="entidad" class="col-sm-2 col-form-label">Entidad Federal:</label>
            <div class="col-sm-10">
                <input type="text" name="entidad" value="{{isset( $persona->entidad)?$persona->entidad:'' }}" class="form-control" placeholder="Ej: Falcón" id="entidad">
            </div>
        </div>

        <div class="row mb-3">
            <label for="municipio" class="col-sm-2 col-form-label">Municipio:</label>
            <div class="col-sm-10">
                <input type="text" name="municipio" value="{{isset( $persona->municipio)?$persona->municipio:'' }}" class="form-control" placeholder="Ej: Colina" id="municipio">
            </div>
        </div>
            
        <div class="row mb-3">
            <label for="parroquia" class="col-sm-2 col-form-label">Parroquia:</label>
            <div class="col-sm-10">
                <input type="text" name="parroquia" value="{{isset( $persona->parroquia)?$persona->parroquia:'' }}" class="form-control" placeholder="Ej: La Vela" id="Parroquia">
            </div>
        </div>

        <div class="row mb-3">
            <label for="sector" class="col-sm-2 col-form-label">Sector:</label>
            <div class="col-sm-10">
                <input type="text" name="sector" value="{{isset( $persona->sector)?$persona->sector:'' }}" class="form-control" placeholder="Ej: Colombia Sur" id="sector">
            </div>
        </div>
                                    
                                    
        <div class="row mb-3">
            <label for="direccion" class="col-sm-2 col-form-label">Dirección:</label>
            <div class="col-sm-10">
                <input type="text" name="direccion" value="{{isset( $persona->direccion)?$persona->direccion:'' }}" class="form-control" placeholder="Ej: calle 7, casa S/N" id="direccion">
            </div>
        </div>

</div>

<div class="container">
    <table class="table table-light">
        <tbody>
            <tr>
                <td>
                    <br><br><input class="btn btn-dark" type="submit"  href="{{ url('persona/')}}" value="{{$modo}} REGISTRO">
                </td>
                <td>
                    <br><br><a class="btn btn-dark" type="submit"  href="{{ url('persona')}}">REGRESAR</a>
                </td>
            </tr>
        </tbody>
    </table>   
</div>
