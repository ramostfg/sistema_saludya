
@extends('plantilla')

        @extends('layouts.app')
            @section('content')

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
                                                <th>Patología</th>
                                                <th>Medicamento</th>
                                                
                                                <th></th>
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
                                                    
                                                    <td>
                                                    <a href="{{url('/persona/'.$persona->id.'/historia')}}">{{$persona->cedula}}</a>
                                                    
                                                    </td>
                                                    
                                                    <td>{{$persona->edad}}</td>
                                                    <td>{{$persona->medicamento->nombrepat}}</td>
                                                    <td>{{$persona->medicamento->nombremed}}</td>
                                                    
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