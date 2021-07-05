<br><h4>TRATAMIENTO</h4>

<div class="row">
    <div class="form-group col-md-6">
        <label for="nombremed" class="form-label">Nombre del Medicamento:</label>
        <input type="text" class="form-control" id="nombremed" name="nombremed" value="{{isset( $persona->patologia->medicamentos->nombremed)?$persona->patologia->medicamentos->nombremed:'' }}">
    </div>

    <div class="form-group col-md-6">
        <label for="tipomed" class="form-label">Tipo de Medicamento:</label>
        <input type="text" class="form-control" id="tipomed" name="tipomed" value="{{isset( $persona->patologia->medicamentos->tipomed)?$persona->patologia->medicamentos->tipomed:'' }}">
    </div>

    <div class="form-group col-md-6">
        <label for="presentmed" class="form-label">Presentación del Medicamento:</label>
        <input type="text" class="form-control" id="presentmed" name="presentmed" value="{{isset( $persona->patologia->medicamentos->presentmed)?$persona->patologia->medicamentos->presentmed:'' }}">
    </div>

    <div class="form-group col-md-6">
        <label for="frecumed" class="form-label">Frecuencia del Medicamento:</label>
        <input type="text" class="form-control" id="frecumed" name="frecumed" value="{{isset( $persona->patologia->medicamentos->frecumed)?$persona->patologia->medicamentos->frecumed:'' }}">
    </div>
</div>