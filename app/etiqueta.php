<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class etiqueta extends Model
{
    protected $fillable = [
        'id_etiqueta', 'materia'
    ];
}
