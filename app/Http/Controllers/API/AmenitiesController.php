<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Amenity;
use App\Http\Resources\Amenity as AmenityResource;
class AmenitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $amenities = Amenity::all();
      return AmenityResource::collection($amenities);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $amenity = new Amenity;
      $amenity->id = request('id');
      $amenity->name = request('name');
      $amenity->save();
      return new AmenityResource($amenity);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Amenity $amenity)
    {
      return new AmenityResource($amenity);
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
    );
    Amenity::where('id', $id)->update($data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Amenity $amenity)
    {
      $amenity->delete();
      return response('deleted'.' '.$amenity->id);
    }
}
