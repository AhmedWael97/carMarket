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
            $table->string('name')->nullable();
            $table->bigInteger('model_id')->nullable();
            $table->bigInteger('brand_id')->nullable();
            $table->double('price')->nullable();
            $table->double('discount_price')->nullable();
            $table->string('from_discount_date')->nullable();
            $table->string('to_discount_date')->nullable();
            $table->integer('qty')->nullable();
            $table->string('warrenty')->nullable();
            $table->string('engine-capacity')->nullable();
            $table->string('horse-power')->nullable();
            $table->string('max_speed')->nullable();
            $table->string('acceleration')->nullable();
            $table->string('transmission_type')->nullable();
            $table->string('year')->nullable();
            $table->string('fuel')->nullable();
            $table->string('litre_per_km')->nullable();
            $table->string('country')->nullable();
            $table->string('assembly_country')->nullable();
            $table->string('length')->nullable();
            $table->string('width')->nullable();
            $table->string('height')->nullable();
            $table->string('height_from_ground')->nullable();
            $table->string('wheele_speed')->nullable();
            $table->string('trunk_size')->nullable();
            $table->string('no_of_seats')->nullable();
            $table->string('traction_type')->nullable();
            $table->string('no_of_cylinder')->nullable();
            $table->string('fuel_tank')->nullable();
            $table->string('capacity')->nullable();
            $table->string('torque_of_newton')->nullable();
            $table->double('insurance_price')->nullable();
            $table->double('register_price')->nullable();
            $table->longText('comforts')->nullable();
            $table->longText('windows')->nullable();
            $table->longText('sound_system')->nullable();
            $table->longText('safety')->nullable();
            $table->longText('other_features')->nullable();
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
