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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('client_name');
            $table->string('client_mobile');
            $table->string('client_phone')->nullable();
            $table->string('client_email')->nullable();
            $table->double('total')->default(0);
            $table->double('tax')->default(0);
            $table->double('discount')->default(0);
            $table->boolean('discount_precent')->default(0)->comment('1 for precent, 0 for fix amount');
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
        Schema::dropIfExists('orders');
    }
};
