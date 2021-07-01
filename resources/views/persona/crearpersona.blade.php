@extends('plantilla')
    @extends('plantilla2')
        @section('encabezado2')
            @section('encabezado')
            <div class="container">
                <form class="row g-3" action="{{url('/persona')}}" method="post" enctype="multipart/form-data">
                            @csrf

                            @include('persona.form',['modo'=>'CREAR']);
                </form>
            </div>
                

            @endsection
        @endsection
