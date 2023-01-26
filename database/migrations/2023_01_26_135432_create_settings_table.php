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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('site_name')->nullable();
            $table->string('site_logo')->nullable();
            $table->string('site_fav_icon')->nullable();
            $table->string('section_one_img')->nullable();
            $table->string('section_subscribe_img')->nullable();
            $table->string('section_subscribe_title')->nullable();
            $table->string('section_subscribe_desc')->nullable();
            $table->string('phone')->nullable();
            $table->string('mobile')->nullable();
            $table->string('location')->nullable();
            $table->longText('description')->nullable();
            $table->string('facebook_url')->nullable();
            $table->string('twitter_url')->nullable();
            $table->string('instagram_url')->nullable();
            $table->string('snap_chat')->nullable();
            $table->string('footer_text')->nullable();
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
        Schema::dropIfExists('settings');
    }
};
