<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class HnlSlider extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hnl_slider', function (Blueprint $table) {
            $table->increments('slider_id');
            $table->string('slider_name');
            $table->string('slider_image');
            $table->string('slider_status');
            $table->string('slider_desc')->nullable();
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
        Schema::dropIfExists('hnl_slider');
    }
}
