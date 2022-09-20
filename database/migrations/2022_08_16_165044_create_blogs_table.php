<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('categury_id')->references('id')->on('blogcateguries')->onDelete('cascade')->default('null');
            $table->string('title');
            $table->string('slug');
            $table->string('desc');
            $table->text('content');
            $table->text('img');
            $table->boolean('status')->default(false);
            $table->boolean('is_fetured')->default(false);
            $table->date('publish_date');
            $table->date('delete_date');
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
        Schema::dropIfExists('blogs');
    }
}
