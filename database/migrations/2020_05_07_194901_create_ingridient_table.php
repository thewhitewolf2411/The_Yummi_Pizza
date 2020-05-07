<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIngridientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingridient', function (Blueprint $table) {
            $table->id();
            $table->integer('pizza_id');
            $table->string('ingridient_one');
            $table->string('ingridient_two');
            $table->string('ingridient_three')->nullable();
            $table->string('ingridient_four')->nullable();
            $table->string('ingridient_five')->nullable();
            $table->string('ingridient_six')->nullable();
            $table->string('ingridient_seven')->nullable();
            $table->string('ingridient_eight')->nullable();
            $table->string('ingridient_nine')->nullable();
            $table->string('ingridient_ten')->nullable();
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
        Schema::dropIfExists('ingridient');
    }
}
