<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Farmhouse extends Model
{
  use HasFactory;
  public function Dimensions(){

    return $this->hasMany(Dimension::class);

  }
  public function Features(){

    return $this->hasMany(Feature::class);

  }
  public function Sizes(){

    return $this->hasMany(Size::class);

  }

  public function Type(){

    return $this->hasMany(Type::class);

  }
}
