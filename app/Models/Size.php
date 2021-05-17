<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Size extends Model
{
  use HasFactory;

  public function Plot(){

    return $this->hasMany(Plot::class);

  }
  public function Farmhouse(){

    return $this->belongsTo(Farmhouse::class);

  }
  public function Flat(){

    return $this->belongsTo(Flat::class);

  }

  public function House(){

    return $this->belongsTo(House::class);

  }
  public function Office(){

    return $this->belongsTo(Office::class);

  }
  public function Plaza(){

    return $this->belongsTo(Plaza::class);

  }
  public function Shop(){

    return $this->belongsTo(Shop::class);

  }

}
