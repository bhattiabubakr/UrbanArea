<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Plot extends Model
{
  use HasFactory;

    public function getRouteKeyName(){

      return 'slug';
    }
    public function Dimension(){

      return $this->belongsTo(Dimension::class);
    }

    public function Feature(){

      return $this->belongsTo(Feature::class);

    }

    public function Size(){

      return $this->belongsTo(Size::class);

    }

    public function Area(){

      return $this->belongsTo(Area::class);

    }
    public function City(){

      return $this->belongsTo(City::class);

    }

    public function Type(){

      return $this->belongsTo(Type::class);
    }
}
