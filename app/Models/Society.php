<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Society extends Model
{
  use HasFactory;
  
      public function Amenities(){
  
        return $this->hasMany(Amenity::class);
  
      } 
}
