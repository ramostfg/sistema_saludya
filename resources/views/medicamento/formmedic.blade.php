<div class="container">
    <br><h3>DATOS DEL MEDICAMENTO</h3><br>
        <div class="row mb-3">
            <label for="nombre_medic" class="col-sm-2 col-form-label">Nombre:</label>
            <div class="col-sm-10">
                <input type="text" name="nombre" value="{{isset($persona->nombre)?$persona->nombre:''}}" class="form-control" placeholder="Ej: Ana Maria" id="nombre_medic">
            </div>
        </div>

        <div class="row mb-3">
            <label for="tipo_medic" class="col-sm-2 col-form-label">Tipo:</label>
            <div class="col-sm-10">
                <input type="text" name="nombre" value="{{isset($persona->nombre)?$persona->nombre:''}}" class="form-control" placeholder="Ej: Ana Maria" id="tipo_medic">
            </div>
        </div>

        <div class="row mb-3">
            <label for="presentacion_medic" class="col-sm-2 col-form-label">Nombre:</label>
            <div class="col-sm-10">
                <input type="text" name="nombre" value="{{isset($persona->nombre)?$persona->nombre:''}}" class="form-control" placeholder="Ej: Ana Maria" id="presentacion_medic">
            </div>
        </div>

        <div class="row mb-3">
            <label for="frecuencia_medic" class="col-sm-2 col-form-label">Nombre:</label>
            <div class="col-sm-10">
                <input type="text" name="nombre" value="{{isset($persona->nombre)?$persona->nombre:''}}" class="form-control" placeholder="Ej: Ana Maria" id="frecuencia_medic">
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