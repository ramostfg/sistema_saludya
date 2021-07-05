@extends('plantilla')
    @extends('layouts.app')
        @section('content')
            @section('encabezado2')
                @section('encabezado')
                    <div class="container">
                        <form class="form" role="form" action="{{url('/persona')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @include('persona.form',['modo'=>'CREAR'])
                        </form>
                    </div>
                @endsection
            @endsection
        @endsection
                

