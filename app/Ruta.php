<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ruta extends Model
{
      protected $fillable = ['descripcion', 'pasaje'];

      public function puntos()
      {
            return $this->belongsToMany(Punto::class);
      }

      public function empresa()
      {
            return $this->belongsTo(Empresa::class);
      }
}
