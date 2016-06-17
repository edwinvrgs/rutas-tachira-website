<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sugerencia extends Model
{
      protected $fillable = ['nombre', 'apellido', 'correo', 'sugerencia', 'empresa'];

      public function rutas()
      {
            return $this->belongsTo(User::class);
      }
}
