<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;
        /**
     * The database name used by the model.
     *
     * @var string
     */
    /**
     * The database table used by the model.
     *
     * @var string
     */

    protected $fillable = ['nombre', 'apellido', 'cedula', 'edad', 'fechanac', 'genero', 'telefono', 'movil', 'correo', 'serial', 'codigo'];

    public static function storeValidation($request)
    {
        return [
            'nombre' => 'max:191|required', 
            'apellido' => 'max:191|required',
            'cedula' => 'min:7|max:8|required',
            'edad' => 'min:1|max:2|required',
            'fechanac' => 'max:191|required',
            'genero' => 'max:191|required',
            'telefono' => 'date_format:' . config('app.date_format') . '|max:11|required',  
            'movil' => 'min:12|max:191|required',
            'correo' => 'max:191|required',
            'serial' => 'min:10|max:10|required',
            'codigo' => 'min:10|max:10|required'
        ];
    }

    public static function updateValidation($request)
    {
        return [
            'nombre' => 'max:191|required', 
            'apellido' => 'max:191|required',
            'cedula' => 'min:7|max:8|required',
            'edad' => 'min:1|max:2|required',
            'fechanac' => 'max:191|required',
            'genero' => 'max:191|required',
            'telefono' => 'date_format:' . config('app.date_format') . '|max:11|required',  
            'movil' => 'min:12|max:191|required',
            'correo' => 'max:191|required',
            'serial' => 'min:10|max:10|required',
            'codigo' => 'min:10|max:10|required'
        ];
    }

    public function direccion()
    {
        return $this->hasOne('App\Models\Direccion', 'persona_id');
    }

}
