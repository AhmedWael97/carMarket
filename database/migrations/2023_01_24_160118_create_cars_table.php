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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('make_id')->nullable();
            $table->foreign('make_id')
            ->references('id')->on('makes')
            ->onDelete('cascade');
            $table->unsignedBigInteger('model_id')->nullable();
            $table->foreign('model_id')
            ->references('id')->on('models')
            ->onDelete('cascade');

            $table->string('name')->nullable();
            $table->double('price')->nullable();
            $table->double('qty')->nullable();
            $table->boolean('used')->default(0)->comment('0 for new 1 for used');
            $table->double('discount_price')->nullable()->default(0);
            $table->string('start_date')->nullable();
            $table->string('end_date')->nullable();
            $table->string('short_desc')->nullable();
            $table->longText('desc')->nullable();
            $table->integer('views')->default(0);
            $table->integer('compare')->default(0);
            $table->integer('favorite')->default(0);
            $table->string("thumbnail_image")->nullable();
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
        Schema::dropIfExists('cars');
    }
};
