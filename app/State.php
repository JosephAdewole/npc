<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    //
    public function lga() {
        return $this->hasMany(Lga::class);
      }
}
