<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

use App\Http\Resources\City as CityResources;


class Country extends JsonResource
{
    
    public function toArray($request)
    {
        // return parent::toArray($request);

        return [

            'id' => $this->id,    
            'name' => $this->name,
            'slug' => $this->slug,
            'intro' => $this->intro,
            'currency' => $this->currency,
            'image' => $this->image,
            'cities' => $this->cities,


        ];

    }
}
