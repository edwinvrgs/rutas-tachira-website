<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
      protected $fillable = ['descripcion'];

      public function rutas()
      {
            return $this->hasMany(Ruta::class);
      }

      public function sugerencia()
      {
            return $this->belongsTo(Sugerencia::class);
      }
}
