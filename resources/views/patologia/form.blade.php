<br><h4>DATOS PATOLÓGICOS</h4>

<div class="row">
    <div class="form-group col-md-6">
        <label for="nombrepat" class="form-label">Nombre de la Patología:</label>
        <input type="text" class="form-control" id="nombrepat" name="nombrepat" value="{{isset( $persona->patologia->nombrepat)?$persona->patologia->nombrepat:'' }}">
    </div>

    <div class="form-group col-md-6">
        <label for="fechapat" class="form-label">Fecha del Informe:</label>
        <input type="date" class="form-control" id="fechapat" name="fechapat" value="{{isset( $persona->patologia->fechapat)?$persona->patologia->fechapat:'' }}">
    </div>

    <div class="form-group col-md-12">
        <label for="descripat" class="form-label">Descripción de la Patología:</label>
        <textarea class="form-control" id="descripat" rows="3" name="descripat">{{isset( $persona->patologia->descripat)?$persona->patologia->descripat:'' }}</textarea>
    </div>
</div>