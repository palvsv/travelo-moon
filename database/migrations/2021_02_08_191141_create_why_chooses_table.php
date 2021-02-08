<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWhyChoosesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('why_chooses', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('subtitle');
            $table->text('featured_image');
            $table->string('item_one');
            $table->text('content_one');
            $table->text('image_one');
            $table->string('item_two');
            $table->text('content_two');
            $table->text('image_two');
            $table->string('item_three');
            $table->text('content_three');
            $table->text('image_three');
            $table->string('item_four');
            $table->text('content_four');
            $table->text('image_four');
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
        Schema::dropIfExists('why_chooses');
    }
}
