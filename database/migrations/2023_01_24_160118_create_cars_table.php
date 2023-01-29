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
            $table->double('discount_price')->default(0);
            $table->string('start_date')->nullable();
            $table->string('end_date')->nullable();
            $table->string('short_desc')->nullable();
            $table->longText('desc')->nullable();
            $table->string('warranty')->nullable();
            $table->string('engine_capacity')->nullable();
            $table->string('horse_power')->nullable();
            $table->string('maxmum_speed')->nullable();
            $table->string('accleration')->nullable();
            $table->string('transmittion')->nullable();
            $table->longText('thumbnail_image')->nullable();
            $table->integer('year')->nullable();
            $table->string('fuel')->nullable();
            $table->string('fuel_usage')->nullable();
            $table->string('country')->nullable();
            $table->string('supplied_country')->nullable();
            $table->string('length')->nullable();
            $table->string('width')->nullable();
            $table->string('ground_clearance')->nullable();
            $table->string('wheel_base')->nullable();
            $table->string('trunk_size')->nullable();
            $table->string('seats')->nullable();
            $table->string('traction_type')->nullable();
            $table->string('clynder')->nullable();
            $table->string('fuel_tank_capacity')->nullable();
            $table->longText('comfort')->nullable();
            $table->longText('windows')->nullable();
            $table->longText('sound_system')->nullable();
            $table->longText('safety')->nullable();
            $table->longText('other')->nullable();
            $table->integer('views')->default(0);
            $table->integer('compare')->default(0);
            $table->integer('favorite')->defualt(0);
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
