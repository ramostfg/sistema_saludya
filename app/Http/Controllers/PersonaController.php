<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use App\Models\Direccion;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['personas']=Persona::with(['direccion'])->paginate(10);
        return view('persona.listapersona',$datos);
    }

       /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('persona.crearpersona');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $parametros = request()->except('_token');
 
        try {    
    
            $persona = Persona::create(
                array(
                    'nombre' => $parametros['nombre'],
                    'apellido' => $parametros['apellido'],
                    'cedula' => $parametros['cedula'],
                    'edad' => $parametros['edad'],
                    'fechanac' => $parametros['fechanac'],
                    'genero' => $parametros['genero'],
                    'telefono' => $parametros['telefono'],
                    'movil' => $parametros['movil'],
                    'correo' => $parametros['correo'],
                    'serial' => $parametros['serial'],
                    'codigo' => $parametros['codigo']
                )
            );

            $persona->direccion()->saveMany(
                [
                    new Direccion ([
                        'entidad' => $parametros['entidad'],
                        'municipio' => $parametros['municipio'],
                        'parroquia' => $parametros['parroquia'],
                        'sector' => $parametros['sector'],
                        'direccion' => $parametros['direccion'],
                        'persona_id' => $persona->id
                    ])
                ]
            );

            return redirect('persona')->with('mensaje','registro con cedula ' .$persona->cedula. ' creado con éxito');

        } catch (\Exception $e) {
            // Si algo sale mal devolvemos un error.
            \Log::info('Error creando persona: '.$e);
            return redirect('persona')->with('mensaje','registro con cedula ' .$persona->cedula. ' no realizado');

        }
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function show(Persona $persona)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $persona=Persona::findOrFail($id);
        return view('persona.editarpersona',compact('persona'))->with('mensaje','registro actualizado con éxito');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datosPersona = request()->except(['_token','_method']);
        Persona::where('id','=',$id)->update($datosPersona);

        $persona=Persona::findOrFail($id);
        return view('persona.editarpersona',compact('persona'))->with('mensaje','registro actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Persona::destroy($id);


        return redirect('persona')->with('mensaje','registro borrado con exito');
        
    }
}
