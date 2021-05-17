<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Plot extends JsonResource
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

            'id' =>$this->id,   
            'slug' =>$this->slug,   
            'title' => $this->title,
            'description' => $this->description,
            'currency' => $this->city->country->currency,
            'city' =>$this->city, 
            'area' => $this->area,
            'feature' =>$this->feature->feature,
            'deal_type' => $this->type->name,
            'size' => $this->size->size,
            'dimension' => $this->dimension->dimension,
            'featured' => $this->featured,
            'amount' => $this->amount,
            'main_image' => $this->main_image,
            'images' => $this->images,
            'added' => $this->created_at,
            'reviewed' => $this->updated_at,


        ];

    }
}
