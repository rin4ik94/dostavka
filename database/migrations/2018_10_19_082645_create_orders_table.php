<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('manager_id')->nullable()->index();
            $table->unsignedInteger('branch_id')->nullable()->index();
            $table->unsignedInteger('client_id')->nullable()->index();
            $table->unsignedInteger('courier_id')->nullable()->index();
            $table->unsignedInteger('payment_type_id')->nullable()->index();
            $table->unsignedInteger('order_status_id')->nullable()->index();
            $table->unsignedInteger('region_id')->nullable()->index();
            $table->string('delivery_address_street')->nullable();
            $table->string('delivery_address_home')->nullable();
            $table->string('delivery_address_floor')->nullable();
            $table->string('delivery_address_apartment')->nullable();
            $table->text('delivery_address_remark')->nullable();
            $table->text('comment')->nullable();
            $table->decimal('delivery_price')->nullable();
            $table->decimal('order_price')->nullable();
            $table->decimal('total_price')->nullable();
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
        Schema::dropIfExists('orders');
    }
}
