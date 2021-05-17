<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class House extends Model
{
  use HasFactory;

  public function getRouteKeyName(){

    return 'slug';
  }

  
  public function Dimensions(){

    return $this->belongsTo(Dimension::class);

  }

  public function Features(){

    return $this->hasMany(Feature::class);

  }

  public function Size(){

    return $this->belongsTo(Size::class);

  }

  public function Amenities(){

    return $this->hasMany(Amenity::class);

  }

  public function Types(){

    return $this->hasMany(Type::class);

  }

  public function Area(){

    return $this->belongsTo(Area::class);

  }

  public function City(){

    return $this->belongsTo(City::class);

  }
}
