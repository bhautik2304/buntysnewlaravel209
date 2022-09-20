<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('Heading');
            $table->text('img_url')->nullable(true);
            $table->string('img_alt')->nullable(true);
            $table->text('discription');
            $table->string('slug');
            $table->string('page_title');
            $table->text('meta_discription');
            $table->text('keyword')->nullable(true);
            $table->boolean('robbost')->default(false);
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
        Schema::dropIfExists('pages');
    }
}
