<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMainEngineeringsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('main_engineerings', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('subtitle');
            $table->string('content');
            $table->string('title1');
            $table->text('content1');
            $table->string('title2');
            $table->string('content2');
            $table->text('image3');
            $table->text('image4');
            $table->string('title5');
            $table->string('content5');
            $table->text('footertitle');
            $table->text('footercontent');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('main_engineerings');
    }
}
