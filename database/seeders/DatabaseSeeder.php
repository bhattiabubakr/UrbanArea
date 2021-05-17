<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
// use App/Models/User;
 //use App\Models\Amenity;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //  \App\Models\User::factory(10)->create();
         \App\Models\Amenity::factory(10)->create();
         \App\Models\Country::factory(10)->create();
         \App\Models\City::factory(10)->create();
         \App\Models\Area::factory(10)->create();
         \App\Models\Category::factory(10)->create();
         \App\Models\Subcategory::factory(10)->create();
         \App\Models\Size::factory(10)->create();
         \App\Models\Dimension::factory(10)->create();
         \App\Models\Team::factory(10)->create();
         \App\Models\Employee::factory(10)->create();
         \App\Models\Type::factory(10)->create();
         \App\Models\Feature::factory(10)->create();
         \App\Models\Plot::factory(10)->create();
         \App\Models\House::factory(10)->create();
         \App\Models\Type::factory(10)->create();
    }
}
