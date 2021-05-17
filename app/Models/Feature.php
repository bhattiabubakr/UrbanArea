<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Feature extends Model
{
  use HasFactory;
    public function Plot(){

      return $this->hasMany(Plot::class);

    }
    public function Farmhouse(){

      return $this->hasMany(Farmhouse::class);

    }
    public function Flat(){

      return $this->hasMany(Flat::class);

    }
    public function House(){

      return $this->belongsTo(House::class);

    }
    public function Plaza(){

      return $this->hasMany(Plaza::class);

    }

    public function Office(){

      return $this->hasMany(Office::class);

    }

    public function Shop(){

      return $this->hasMany(Shop::class);

    }


}
