<?php

namespace App\Http\Resources;

use App\Http\Resources\Country as CountriesResource;
use App\Http\Resources\Area as AreasResource;

use Illuminate\Http\Resources\Json\JsonResource;


class City extends JsonResource
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
          'slug' => $this->slug,
          'image' =>$this->image,
          'intro' =>$this->intro,
          'country' => $this->country,
          'areas' => $this->areas,


        ];
    }
}
