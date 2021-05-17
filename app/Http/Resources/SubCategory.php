<?php

namespace App\Http\Resources;
use App\Http\Resources\Category as CategoriesResource;


use Illuminate\Http\Resources\Json\JsonResource;

class SubCategory extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);

        return [

          'id' => $this->id,
          'name' => $this->name,
          'category' => new CategoriesResource($this->category),


        ];
    }
}
