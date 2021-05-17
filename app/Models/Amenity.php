<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Amenity extends Model
{
    use HasFactory;
    protected $fillable = ['name'];
    
    public function Plot(){

        return $this->belongsTo(Plot::class);
    }

    public function Shop(){

        return $this->belongsTo(Shop::class);
    }
    public function House(){

        return $this->belongsTo(House::class);
    }
    public function Flat(){

        return $this->belongsTo(Flat::class);
    }
    public function Farmhouse(){

        return $this->belongsTo(Farmhouse::class);
    }

    public function Plaza(){

        return $this->belongsTo(Plaza::class);
    }

    public function Society(){

        return $this->belongsTo(Society::class);
    }

    public function Office(){

        return $this->belongsTo(Office::class);
    }
}
