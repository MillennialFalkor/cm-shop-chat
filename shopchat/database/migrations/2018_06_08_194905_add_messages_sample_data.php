<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMessagesSampleData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('messages')->insert([
            array(
                'user_id' => 2,
                'product_id' => 1,
                'content' => 'I love this! Nice work!',
            ),
            array(
                'user_id' => 1,
                'product_id' => 1,
                'content' => 'Thank you! I think it turned out well.',
            ),
            array(
                'user_id' => 2,
                'product_id' => 2,
                'content' => 'Thanks everyone for looking at my work!',
            ),
            array(
                'user_id' => 3,
                'product_id' => 2,
                'content' => 'Amazing! I have to buy this right now.',
            ),
            array(
                'user_id' => 1,
                'product_id' => 3,
                'content' => 'Wow this is great, are there others in the series?.',
            ),
            array(
                'user_id' => 3,
                'product_id' => 3,
                'content' => 'Yes, I took several! Thanks for looking!',
            ),
            array(
                'user_id' => 1,
                'product_id' => 3,
                'content' => 'Perfect, thanks.',
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
