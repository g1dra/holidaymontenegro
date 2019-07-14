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
            $table->integer('price')->nullable();
            $table->string('preview_image');
            $table->string('title')->nullable();
            $table->string('short_description')->nullable();
            $table->longText('description')->nullable();
            $table->string('type'); // table
            $table->string('region')->nullable(); // table
            $table->string('location')->nullable(); // table gradovi
            $table->string('difficultly')->nullable(); // select options
            $table->string('season')->nullable(); // select options
            $table->integer('days')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onUpdate('cascade')
                ->onDelete('cascade');
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
