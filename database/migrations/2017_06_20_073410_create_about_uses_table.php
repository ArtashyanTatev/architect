<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAboutUsesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_uses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('image')->nullable();
            $table->string('title_hy')->nullable();
            $table->string('title_ru')->nullable();
            $table->string('title_en')->nullable();
            $table->string('header_ru')->nullable();
            $table->string('header_hy')->nullable();
            $table->string('header_en')->nullable();
            $table->text('decsription_hy')->nullable();
            $table->text('decsription_en')->nullable();
            $table->text('decsription_ru')->nullable();
            $table->string('l1_hy')->nullable();
            $table->string('l1_ru')->nullable();
            $table->string('l1_en')->nullable();
            $table->string('l2_hy')->nullable();
            $table->string('l2_ru')->nullable();
            $table->string('l2_en')->nullable();
            $table->string('l3_hy')->nullable();
            $table->string('l3_ru')->nullable();
            $table->string('l3_en')->nullable();
            $table->string('l4_hy')->nullable();
            $table->string('l4_ru')->nullable();
            $table->string('l4_en')->nullable();
            $table->string('l5_hy')->nullable();
            $table->string('l5_en')->nullable();
            $table->string('l5_ru')->nullable();
            $table->string('l6_hy')->nullable();
            $table->string('l6_ru')->nullable();
            $table->string('l6_en')->nullable();
            $table->string('l7_hy')->nullable();
            $table->string('l7_ru')->nullable();
            $table->string('l7_en')->nullable();
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
        Schema::dropIfExists('about_uses');
    }
}
