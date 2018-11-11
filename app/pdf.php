<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pdf extends Model
{
    protected $fillable = [
        'id_pdf', 'titulo_pdf','imagen','usuario_id','etiqueta_id'
    ];
}
