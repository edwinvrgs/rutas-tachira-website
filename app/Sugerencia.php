<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sugerencia extends Model
{
      protected $fillable = ['nombre', 'apellido', 'correo', 'sugerencia'];

      public function user()
      {
            return $this->belongsTo(User::class);
      }

      public function empresa()
      {
            return $this->hasOne(Empresa::class);
      }
}
