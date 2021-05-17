<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Area;
use App\Http\Resources\Area as AreaResource;
class AreasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $areas = Area::all();
        return AreaResource::collection($areas);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([

            'name' => 'required|max:255',
            'city_id' => 'required|max:255',
    
    
          ]);
    
        $area = new Area;
      $area->id = request('id');
      $area->name = request('name');
      $area->slug = request('slug');
      $area->city_id = request('city_id');
      $area->intro = request('intro');
      $area->image = request('image');
      $area->save();
      return new AreaResource($area);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Area $area)
    {
        return new AreaResource($area);
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
            'city_id'=>$request-> input('city_id'),
            'intro'=>$request-> input('intro'),
            'image'=>$request-> input('image')
        );
        Area::where('id', $id)->update($data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Area $area)
    {
        $area->delete();
      return response('deleted'.' '.$area->id);
    }
}
