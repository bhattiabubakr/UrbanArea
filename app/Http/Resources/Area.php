<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

use App\Http\Resources\City as CityResource;


class Area extends JsonResource
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
          'slug' =>$this->slug,
          'intro' => $this->intro,
          'intro' => $this->intro,
          'image' => $this->image,
          'country' => $this->city->country,
          'currency' => $this->city->country->currency,
          'city' => $this->city,
          'plots' => $this->plots,
          'houses' => $this->houses,
          

        ];
    }
}
