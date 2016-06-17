<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Punto extends Model
{
      protected $fillable = ['descripcion', 'tipo'];

      public function rutas()
      {
            return $this->belongsToMany(Ruta::class);
      }
}
