<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stores', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('city_id')->references('id')->on('storecities')->onDelete('cascade');
            $table->string('lat');
            $table->string('lang');
            $table->string('address');
            $table->string('tel');
            $table->string('email');
            $table->string('whatsapp_no');
            $table->string('instalink')->default('#');
            $table->string('maplink')->default('#');
            // $table->string('iframe')->nullable(true);
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
        Schema::dropIfExists('stores');
    }
}
