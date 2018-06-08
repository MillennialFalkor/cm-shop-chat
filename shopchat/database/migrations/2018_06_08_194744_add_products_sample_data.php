<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddProductsSampleData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('products')->insert([
            array(
                'user_id' => 1,
                'key' => 'sailboat-open-water',
                'title' => 'Sailboat on Open Water',
                'description' => 'Sailing on open water, black and white, misty, calm',
                'image' => '/images/products/sailboat-isolated.jpg',
            ),
            array(
                'user_id' => 2,
                'key' => 'boats-sunrise',
                'title' => 'Boats Docked at Sunrise',
                'description' => 'Yachts docked at sunrise, calm water, clouds, reflection',
                'image' => '/images/products/sunrise-boats.jpg',
            ),
            array(
                'user_id' => 3,
                'key' => 'yellowstone',
                'title' => 'Yellowstone National Park',
                'description' => 'Yellowstone National Park, Wyoming, sunrise, misty',
                'image' => '/images/products/yellowstone.jpg',
            )
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
