
@extends('plantilla')
    @extends('plantilla2')
        @extends('layouts.app')
            @section('content')
                @section('encabezado2')
                    @section('encabezado')
                        
                        @if(Session::has('mensaje'))
                            {{ Session::get('mensaje')}}
                        @endif

                                <div class="table-responsive">
                                    <table class="table table-light">
                                        <thead class="thead-light">
                                            <tr>
                                                <th>#</th>
                                                <th>Nombres</th>
                                                <th>Apellidos</th>
                                                <th>Cédula</th>
                                                <th>Edad</th>
                                                <th>Fecha de Nacimiento</th>
                                                <th>Telefono</th>
                                                <th>Movil</th>
                                                <th>Serial del Carnet</th>
                                                <th>Correo</th>
                                                <th>Dirección</th>
                                                <th></th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        
                                        <tbody>
                                            @foreach($personas as $persona)
                                                <tr>
                                                    <td>{{$persona->id}}</td>
                                                    <td>{{$persona->nombre}}</td>
                                                    <td>{{$persona->apellido}}</td>
                                                    <td>{{$persona->cedula}}</td>
                                                    <td>{{$persona->edad}}</td>
                                                    <td>{{$persona->fechanac}}</td>
                                                    <td>{{$persona->telefono}}</td>
                                                    <td>{{$persona->movil}}</td>
                                                    <td>{{$persona->serial}}</td>
                                                    <td>{{$persona->correo}}</td>
                                                    <td>{{$persona->direccion->direccion}}</td>
                                                    <td><a href="{{url('/persona/'.$persona->id.'/edit')}}">
                                                            <button type="submit" onclick="return confirm('¿Desea editar este registro?')" class="btn btn-dark">EDITAR</button>
                                                        </a>
                                                    </td>
                                                    <td>                                
                                                        <form action="{{url('/persona/'.$persona->id)}}" method="post">
                                                            @csrf
                                                            {{method_field('DELETE')}}
                                                            <button type="submit" onclick="return confirm('¿Desea borrar este registro?')" class="btn btn-dark">BORRAR</button>
                                                        </form>                         
                                                    </td>
                                                </tr>
                                            @endforeach    
                                        </tbody>
                                    </table>
                                </div>
                    @endsection
                @endsection
            @endsection