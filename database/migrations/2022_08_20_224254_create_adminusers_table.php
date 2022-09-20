<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminusersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adminusers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('role_id')->references('id')->on('roles')->onDelete('cascade')->nullable();
            $table->string('name');
            $table->text('avatar')->default('https://img.freepik.com/free-photo/portrait-young-beautiful-playful-woman-with-bun-posing_176420-12392.jpg?t=st=1661084219~exp=1661084819~hmac=f17e0fbd2a52bce735bd76e43aeec4c15bce8be16bdf83b5562ebadf1bcf1341');
            $table->string('mobaile');
            $table->string('email');
            $table->text('password');
            $table->text('addresss')->nullable();
            $table->boolean('status')->default(true);
            $table->boolean('is_admin')->default(false);
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
        Schema::dropIfExists('adminusers');
    }
}
