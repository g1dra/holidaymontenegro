<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('price');
            $table->string('title');
            $table->string('short_description');
            $table->longText('description');
            $table->string('category'); // table
            $table->string('region'); // table
            $table->string('location'); // table
            $table->string('difficulty'); // select options
            $table->string('season'); // select options
            $table->string('type'); // select options
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}
