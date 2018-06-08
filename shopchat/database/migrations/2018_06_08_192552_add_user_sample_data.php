<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUserSampleData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('users')->insert([
            array(
                'username' => 'andrew',
                'name' => 'Andrew Reinhardt',
            ),
            array(
                'username' => 'jim',
                'name' => 'Jim Oneal',
            ),
            array(
                'username' => 'sarah',
                'name' => 'Sarah Foley',
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
