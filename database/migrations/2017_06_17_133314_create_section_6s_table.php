<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSection6sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('section_6s', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title_hy')->nullable();
            $table->string('title_en')->nullable();
            $table->string('title_ru')->nullable();
            $table->string('li1_hy')->nullable();
            $table->string('li1_en')->nullable();
            $table->string('li1_ru')->nullable();
            $table->string('li2_hy')->nullable();
            $table->string('li2_en')->nullable();
            $table->string('li2_ru')->nullable();
            $table->string('li3_hy')->nullable();
            $table->string('li3_en')->nullable();
            $table->string('li3_ru')->nullable();
            $table->string('li4_hy')->nullable();
            $table->string('li4_en')->nullable();
            $table->string('li4_ru')->nullable();
            $table->string('li5_hy')->nullable();
            $table->string('li5_en')->nullable();
            $table->string('li5_ru')->nullable();
            $table->string('image')->nullable();
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
        Schema::dropIfExists('section_6s');
    }
}
