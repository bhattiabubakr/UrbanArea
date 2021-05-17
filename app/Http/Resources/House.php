<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class House extends JsonResource
{
   
    public function toArray($request)
    {
        // return parent::toArray($request);

        return [

            'title' => $this->title,
            'slug' => $this->slug,
            'description' => $this->description,
            'currency' => $this->city->country->currency,
            'amount' => $this->amount,
            'beds' => $this->beds,
            'baths' => $this->baths,
            'drawing' => $this->drawing,
            'dining' => $this->dining,
            'size' => $this->size,
            'deal_type' => $this->type,
            'area' => $this->area,
            'city' => $this->city,
            'amenity' => $this->amenity,
            'feature' => $this->feature,
            'image' => $this->image,
            


        ];
    }
}
