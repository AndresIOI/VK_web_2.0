<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class examen extends Model
{
  protected $fillable = [
      'id_examen', 'nombre_examen'
  ];
}
