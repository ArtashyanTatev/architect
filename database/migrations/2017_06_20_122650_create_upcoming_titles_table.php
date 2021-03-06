<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUpcomingTitlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('upcoming_titles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title_en')->nullable();
            $table->string('title_ru')->nullable();
            $table->string('title_hy')->nullable();
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
        Schema::dropIfExists('upcoming_titles');
    }
}
