<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUserAttributesSampleData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('user_attributes')->insert([
            array(
                'user_id' => 1,
                'attr_name' => 'messages_count',
                'attr_value' => 3,
            ),
            array(
                'user_id' => 2,
                'attr_name' => 'messages_count',
                'attr_value' => 2,
            ),
            array(
                'user_id' => 3,
                'attr_name' => 'messages_count',
                'attr_value' => 2,
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
