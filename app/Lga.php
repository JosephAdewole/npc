<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lga extends Model
{
    //
    public function ward() {
        return $this->hasMany(Ward::class);
      }
}
