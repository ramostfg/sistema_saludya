<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patologia extends Model
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

    protected $fillable = ['nombrepat', 'descripat', 'fechapat', 'persona_id'];

    public static function storeValidation($request)
    {
        return [
            'nombrepat'=>'max:191|required',
            'descripat'=>'max:191|required',
            'fechapat'=>'date_format:' . config('app.date_format') . '|max:11|required',
        ];

    }

    public static function updateValidation($request)
    {
        return [
            'nombrepat'=>'max:191|required',
            'descripat'=>'max:191|required',
            'fechapat'=>'date_format:' . config('app.date_format') . '|max:11|required',
        ];
    }
 
    public function persona()
    {
        return $this->belongsTo('App\Models\Personas', 'persona_id', 'id');
    }

}
