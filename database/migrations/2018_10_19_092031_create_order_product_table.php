<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_product', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('order_id')->nullable()->index();
            $table->unsignedInteger('product_id')->nullable()->index();
            $table->string('product_name')->nullable();
            $table->string('product_count')->nullable();
            $table->string('product_price')->nullable();
            $table->string('product_total_price')->nullable(); 
            $table->string('product_measurement')->nullable();
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
        Schema::dropIfExists('order_product');
    }
}
