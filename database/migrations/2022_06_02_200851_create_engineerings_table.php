<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEngineeringsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('engineerings', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('content');
            $table->text('image');
            $table->string('step1');
            $table->string('step2');
            $table->string('step3');
            $table->string('step4');
            $table->text('logo1');
            $table->text('content1');
            $table->text('logo2');
            $table->text('content2');
            $table->text('logo3');
            $table->text('content3');
            $table->text('logo4');
            $table->text('content4');
            $table->text('logo5');
            $table->text('content5');
            $table->text('logo6');
            $table->text('content6');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('engineerings');
    }
}
