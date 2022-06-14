<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDescriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('descriptions', function (Blueprint $table) {
            $table->id();
            $table->text('logo1');
            $table->text('title1');
            $table->text('log21');
            $table->text('title2');
            $table->text('logo3');
            $table->text('title3');
            $table->text('logo4');
            $table->text('title4');
            $table->text('logo5');
            $table->text('title5');
            $table->text('logo6');
            $table->text('title6');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('descriptions');
    }
}
