<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\City;
use App\Http\Resources\City as CityResource;
class CitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cities = City::all();
        return CityResource::collection($cities);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $city = new City;
      $city->id = request('id');
      $city->name = request('name');
      $city->country_id = request('country_id');
      $city->slug = request('slug');
      $city->image = request('image');
      $city->intro = request('intro');
      $city->save();
      return new CityResource($city);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(City $city)
    {
        return new CityResource($city);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = array(
            'id'=> $request-> input('id'),
            'name'=>$request-> input('name'),
            'country_id'=>$request-> input('country_id'),
            'slug'=>$request-> input('slug'),
            'image'=>$request-> input('image'),
            'intro'=>$request-> input('intro')
        );
        City::where('id', $id)->update($data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(City $city)
    {
        $city->delete();
      return response('deleted'.' '.$city->id);
    }
}
