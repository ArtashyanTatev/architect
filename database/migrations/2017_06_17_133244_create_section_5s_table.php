<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSection5sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('section_5s', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title_hy')->nullable();
            $table->string('title_ru')->nullable();
            $table->string('title_en')->nullable();
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
        Schema::dropIfExists('section_5s');
    }
}
