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
            $table->string('name_uz')->nullable();
            $table->string('name_ru')->nullable();
            $table->string('image')->nullable();
            $table->string('measurement')->nullable();
            $table->string('new_price')->nullable();
            $table->string('old_price')->nullable();
            $table->boolean('status')->default('1');
            $table->boolean('moderation')->default('0');
            $table->unsignedInteger('category_id')->nullable();
            // $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->unsignedInteger('manager_id')->nullable();
            // $table->foreign('manager_id')->references('id')->on('managers')->onDelete('cascade');
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
