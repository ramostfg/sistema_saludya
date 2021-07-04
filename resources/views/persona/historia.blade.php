@extends('plantilla')

        @extends('layouts.app')
            @section('content')

                    @section('encabezado')

        <h1>HISTORIA MÉDICA</h1>

        <h4>DATOS PERSONALES</h4>

            <div class="col-md-4">
                <label for="nombre" class="form-label">Nombres:</label>
                <input type="text" name="nombre" value="{{isset($persona->nombre)?$persona->nombre:''}}"class="form-control" id="nombre">
            </div>

            <div class="col-md-4">
                <label for="apellido" class="form-label">Apellidos:</label>
                <input type="text" name="apellido" value="{{isset($persona->apellido)?$persona->apellido:''}}" class="form-control" id="apellido" >
            </div>

            <div class="col-md-4">
                <label for="cedula" class="form-label">Cédula de Identidad:</label>
                <input type="text" class="form-control" id="cedula" name="cedula" value="{{isset( $persona->cedula)?$persona->cedula:'' }}">
            </div>

            <div class="col-md-2">
                <label for="edad" class="form-label">Edad:</label>
                <input type="text" class="form-control" id="edad" name="edad" value="{{isset( $persona->edad)?$persona->edad:'' }}">
            </div>

            <div class="col-md-4">
                <label for="movil" class="form-label">Teléfono Movil:</label>
                <input type="text" class="form-control" id="movil" name="movil" value="{{isset( $persona->movil)?$persona->movil:'' }}">
            </div>

            <div class="col-md-4">
                <label for="municipio" class="form-label">Municipio:</label>
                <input type="text" class="form-control" id="municipio" name="municipio" value="{{isset( $persona->municipio)?$persona->municipio:'' }}">
            </div>

            <div class="col-md-4">
                <label for="sector" class="form-label">Sector:</label>
                <input type="text" class="form-control" id="sector" name="sector" value="{{isset( $persona->sector)?$persona->sector:'' }}">
            </div>

            <div class="col-md-8">
                <label for="direccion" class="form-label">Dirección:</label>
                <input type="text" class="form-control" id="direccion" name="direccion" value="{{isset( $persona->direccion)?$persona->direccion:'' }}">
            </div>

            <br><h4>DATOS PATOLÓGICOS</h4>
            <div class="col-md-6">
                <label for="nombrepat" class="form-label">Nombre de la Patología:</label>
                <input type="text" class="form-control" id="nombrepat" name="nombrepat" value="{{isset( $persona->medicamento->nombrepat)?$persona->medicamento->nombrepat:'' }}">
            </div>

            <div class="col-md-6">
                <label for="fechapat" class="form-label">Fecha del Informe:</label>
                <input type="date" class="form-control" id="fechapat" name="fechapat" value="{{isset( $persona->medicamento->fechapat)?$persona->medicamento->fechapat:'' }}">
            </div>

            <div class="col-md-12">
                <label for="descripat" class="form-label">Descripción de la Patología:</label>
                <textarea class="form-control" id="descripat" rows="3" name="descripat" value="{{isset( $persona->medicamento->descripat)?$persona->medicamento->descripat:'' }}"></textarea>
            </div>

            <br><h4>TRATAMIENTO</h4>
            <div class="col-md-6">
                <label for="nombremed" class="form-label">Nombre del Medicamento:</label>
                <input type="text" class="form-control" id="nombremed" name="nombremed" value="{{isset( $persona->medicamento->nombremed)?$persona->medicamento->nombremed:'' }}">
            </div>

            <div class="col-md-6">
                <label for="frecumed" class="form-label">Frecuencia del Medicamento:</label>
                <input type="text" class="form-control" id="frecumed" name="frecumed" value="{{isset( $persona->medicamento->frecumed)?$persona->medicamento->frecumed:'' }}">
            </div>

                    @endsection

            @endsection