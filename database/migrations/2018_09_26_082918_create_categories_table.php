<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void 
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_uz')->nullable();
            $table->string('name_ru')->nullable();
            $table->string('slug')->nullable();
            $table->string('position')->nullable();
            $table->integer('parent_id')->nullable();
            $table->unsignedInteger('manager_id')->nullable();
            // $table->foreign('manager_id')->references('id')->on('managers')->onDelete('cascade');
            $table->boolean('status')->default(1);
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
        Schema::dropIfExists('categories');
    }
}
