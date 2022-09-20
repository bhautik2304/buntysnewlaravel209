<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFandqanswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fandqanswers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('fandqs_id')->references('id')->on('fandqs')->onDelete('cascade');
            $table->foreignId('user_id')->references('id')->on('adminusers')->onDelete('cascade');
            $table->text('answer');
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
        Schema::dropIfExists('fandqanswers');
    }
}
