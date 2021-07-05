@extends('plantilla')   `
    @extends('layouts.app')
        @section('content')
            @section('encabezado2')
                @section('encabezado')
    
                    <form class="form row" role="form" action="{{url('/persona/'.$persona->id)}}" method="post" enctype="multipart/form-data">
                        @csrf 
                        {{ method_field('PATCH') }}
                        @include('persona.form',['modo'=>'EDITAR'])
                    </form>

                @endsection
            @endsection
        @endsection

