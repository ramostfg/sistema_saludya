<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Direccion extends Model
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

    protected $fillable = ['entidad', 'municipio', 'parroquia', 'sector', 'direccion', 'persona_id'];

    public static function storeValidation($request)
    {
        return [
            'nombre' => 'max:191|required', 
            'entidad' => 'max:191|required',
            'municipio' => 'max:191|required',
            'parroquia' => 'max:191|required',
            'sector' => 'max:191|required',
            'direccion' => 'max:191|required',
            'persona_id' => 'integer|exists:personas,id'
        ];
    }

    public static function updateValidation($request)
    {
        return [
            'nombre' => 'max:191|required',
            'entidad' => 'max:191|required',
            'municipio' => 'max:191|required', 
            'parroquia' => 'max:191|required',
            'sector' => 'max:191|required',
            'direccion'  => 'max:191|required',
            'persona_id' => 'integer|exists:personas,id'
        ];
    }

    public function persona()
    {
        return $this->belongsTo('App\Models\Personas', 'persona_id', 'id');
    }

}
