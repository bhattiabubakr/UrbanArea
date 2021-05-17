<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Area extends Model
{
  use HasFactory;
  public function getRouteKeyName(){

    return 'slug';
  }

  public function City(){

    return $this->belongsTo(City::class);

  }

  public function Plots(){

    return $this->hasMany(Plot::class);
  }

  public function Houses(){

    return $this->hasMany(House::class);
  }


}
