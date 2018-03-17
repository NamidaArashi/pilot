<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('categ_tag',24);
            $table->foreign('categ_tag')->references('tag')->on('categories');
            $table->string('title',150);
            $table->text('body');
            $table->decimal('price',8,2);
            $table->decimal('last_price',8,2);
            $table->string('image_path')->default('0.png');
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
        Schema::dropIfExists('products');
    }
}
