<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicamento extends Model
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

     protected $fillable = ['nombrepat','descripat','fechapat','nombremed','tipomed','presentmed','frecumed','persona_id'];

     public static function storeValidation($request)
     {
         return[
             'nombrepat' => 'max:191|required',
             'descripat' => 'max:191|required',
             'fechapat'=> 'date_format:' . config('app.date_format') . '|max:11|required',
             'nombremed'=> 'max:191|required',
             'tipomed' => 'max:191|required',
             'presentemed' => 'max:191|required',
             'frecumed' => 'max:191|required',
             'persona_id' => 'integer|exists:personas,id'
         ];
     }

     public static function updateValidation($request)
     {
         return[
             'nombrepat' => 'max:191|required',
             'descripat' => 'max:191|required',
             'fechapat'=> 'date_format:' . config('app.date_format') . '|max:11|required',
             'nombremed'=> 'max:191|required',
             'tipomed' => 'max:191|required',
             'presentemed' => 'max:191|required',
             'frecumed' => 'max:191|required',
             'persona_id' => 'integer|exists:personas,id'
         ];
     }

     public function persona()
     {
        return $this->belongsTo('App\Models\Persona', 'persona_id', 'id');
     }
    
    }
