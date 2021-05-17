<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AmenitiesController;
use App\Http\Controllers\API\CountriesController;
use App\Http\Controllers\API\CitiesController;
use App\Http\Controllers\API\AreasController;
use App\Http\Controllers\API\CategoriesController;
use App\Http\Controllers\API\DimesionsController;
use App\Http\Controllers\API\EmployeeController;
use App\Http\Controllers\API\FarmhousesController;
use App\Http\Controllers\API\FeaturesController;
use App\Http\Controllers\API\FlatsController;
use App\Http\Controllers\API\HousesController;
use App\Http\Controllers\API\OfficesController;
use App\Http\Controllers\API\PlazasController;
use App\Http\Controllers\API\PlotsController;
use App\Http\Controllers\API\SizesController;
use App\Http\Controllers\API\SocietiesController;
use App\Http\Controllers\API\SubcategoriesController;
use App\Http\Controllers\API\TagsController;
use App\Http\Controllers\API\TeamController;
use App\Http\Controllers\API\TypeController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::apiResource('amenities', AmenitiesController::class);
Route::apiResource('blogs', BlogController::class);
Route::apiResource('categories', CategoriesController::class);
Route::apiResource('dimensions', DimesionsController::class);
Route::apiResource('employees', EmployeeController::class);
Route::apiResource('farmhouses', FarmhousesController::class);
Route::apiResource('features', FeaturesController::class);
Route::apiResource('amenities', FlatsController::class);
Route::apiResource('houses', HousesController::class);
Route::apiResource('offices', OfficesController::class);
Route::apiResource('plazas', PlazasController::class);
Route::apiResource('plots', PlotsController::class);
Route::apiResource('sizes', SizesController::class);
Route::apiResource('societies', SocietiesController::class);
Route::apiResource('subcategories', SubcategoriesController::class);
Route::apiResource('tags', TagsController::class);
Route::apiResource('teams', TeamController::class);
Route::apiResource('types', TypeController::class);
Route::apiResource('countries', CountriesController::class);
Route::apiResource('cities', CitiesController::class);
Route::apiResource('areas', AreasController::class);