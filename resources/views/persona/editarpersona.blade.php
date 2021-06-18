@extends('plantilla')
    @extends('plantilla2')
        @section('encabezado2')
            @section('encabezado')
                
                <form action="{{url('/persona/'.$persona->id)}}" method="post" enctype="multipart/form-data">
                    @csrf 
                    {{ method_field('PATCH') }}

                    @include('persona.form',['modo'=>'EDITAR']);
                </form>

            @endsection
        @endsection

