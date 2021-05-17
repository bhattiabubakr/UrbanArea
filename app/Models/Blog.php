<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    public function Tags(){

      return $this->hasMany(Tag::class);
    }
}
