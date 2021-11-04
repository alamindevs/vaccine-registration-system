<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePublicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publics', function (Blueprint $table) {
            $table->id();
            $table->foreignId('center_id')->constrained();
            $table->foreignId('occupation_id')->constrained();
            $table->string('name');
            $table->string('phone');
            $table->string('nid');
            $table->dateTime('birthdate');
            $table->integer('gender');
            $table->dateTime('vaccine1')->nullable();
            $table->dateTime('vaccine2')->nullable();
            $table->boolean('status')->default(true);
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
        Schema::dropIfExists('publics');
    }
}
