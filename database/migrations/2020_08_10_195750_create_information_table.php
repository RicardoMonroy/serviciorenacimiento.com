<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('information', function (Blueprint $table) {
            $table->id();

            $table->string('bannername')->nullable();
            $table->string('slogan')->nullable();
            $table->string('politic')->nullable();
            $table->text('description')->nullable();
            $table->text('map')->nullable();
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('privacidad')->nullable();
            $table->text('mission')->nullable();
            $table->text('vision')->nullable();
            $table->string('value1title')->nullable();
            $table->text('value1text')->nullable();
            $table->string('value2title')->nullable();
            $table->text('value2text')->nullable();
            $table->string('value3title')->nullable();
            $table->text('value3text')->nullable();
            $table->string('value4title')->nullable();
            $table->text('value4text')->nullable();
            $table->string('value5title')->nullable();
            $table->text('value5text')->nullable();

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
        Schema::dropIfExists('information');
    }
}
