<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Category extends Model
{
  use HasFactory;

  public function Subcategory(){

    return $this->hasMany(Subcategory::class);

  }

  public function Categories(){

        return $this->hasManyThrough(Category::class, SubCategory::class, 'category_id', 'id');

  }
}
