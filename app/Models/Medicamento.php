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

    protected $fillable = ['nombremed', 'tipomed', 'presentmed', 'frecumed', 'patologia_id'];

    public function patologia()
    {
        return $this->belongsTo('App\Models\Patologia', 'patologia_id', 'id');
    }
}
