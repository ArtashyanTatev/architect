<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSection2sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('section_2s', function (Blueprint $table) {
            $table->increments('id');
            $table->string('image')->nullable();
            $table->text('title_hy')->nullable();
            $table->text('title_en')->nullable();
            $table->text('title_ru')->nullable();
            $table->string('logo')->nullable();
            $table->text('description_hy')->nullable();
            $table->text('description_ru')->nullable();
            $table->text('description_en')->nullable();
            $table->integer('fs')->default(45);
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
        Schema::dropIfExists('section_2s');
    }
}
