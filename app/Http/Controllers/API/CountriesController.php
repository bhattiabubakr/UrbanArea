<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Country;
use App\Http\Resources\Country as CountryResource;
class CountriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countries = Country::all();
        return CountryResource::collection($countries);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $country = new Country;
      $country->id = request('id');
      $country->name = request('name');
      $country->slug = request('slug');
      $country->intro = request('intro');
      $country->currency = request('currency');
      $country->image = request('image');
      $country->save();
      return new CountryResource($country);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Country $country)
    {
        return new CountryResource($country);
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
            'slug'=>$request-> input('slug'),
            'intro'=>$request-> input('intro'),
            'currency'=>$request-> input('currency'),
            'image'=>$request-> input('image')
        );
        Country::where('id', $id)->update($data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Country $country)
    {
        $country->delete();
        return response('deleted'.' '.$country->id);
    }
}
