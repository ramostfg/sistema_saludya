@extends('plantilla')
    @extends('plantilla2')
        @section('encabezado2')
            @section('encabezado')
                <h1>hola medicamento</h1>

                <div class="container">
                    <form action="{{url('/persona')}}" method="post" enctype="multipart/form-data">
                        @csrf

                        @include('medicamento.formmedic',['modo'=>'CREAR'])
                    </form>
                </div>

            @endsection
        @endsection
