<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('order_id');
            $table->foreign('order_id')
            ->references('id')->on('orders')
            ->onDelete('cascade');
            $table->unsignedBigInteger('car_id');
            $table->foreign('car_id')
            ->references('id')->on('cars')
            ->onDelete('cascade');
            $table->integer('qty')->default(0);
            $table->double('price')->default(0);
            $table->double('discount')->default(0);
            $table->boolean('discount_precent')->default(0)->comment('1 for precent, 0 for fix amount');
            $table->double('total_line')->define(0);
            $table->softDeletes();
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
        Schema::dropIfExists('order_details');
    }
};
