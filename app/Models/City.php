<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class City extends Model
{
  use HasFactory;
  public function getRouteKeyName(){

    return 'slug';
  }

  public function Areas(){

    return $this->hasMany(Area::class);

  }

  public function Country(){

    return $this->belongsTo(Country::class);

  }
  public function Plots(){

    return $this->hasMany(Plot::class);
  }

  public function Houses(){

    return $this->hasMany(House::class);
  }
}
