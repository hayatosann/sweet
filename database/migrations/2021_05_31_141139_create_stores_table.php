<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stores', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('category_id');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->integer('prefecture_id');
            $table->foreign('prefecture_id')->references('id')->on('prefectures');
            $table->string('address');
            $table->string('phone_number');
            $table->string('opening_hour');
            $table->string('closing_day');
            $table->string('price');
            $table->string('store_image');
            $table->string('recommend_product');
            $table->string('recommend_image');
            $table->decimal('latitude');
            $table->decimal('longitude');
            $table->string('url');
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
        Schema::dropIfExists('stores');
    }
}
