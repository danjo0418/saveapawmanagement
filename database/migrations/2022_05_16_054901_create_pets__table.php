<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pets', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->enum('status',['adopt','lostandfound']);
            $table->string('name')->nullable();
            $table->string('breed');
            $table->string('color');
            $table->enum('gender',['male','female']);
            $table->string('age');
            $table->longText('description');
            $table->longText('filename');
            $table->integer('is_approved')->default(0); // 0 = pendin 1 = approved 2 = declined 3 = deleted
            $table->integer('is_claim')->default(0); // 1 = claim
            $table->integer('is_adapt')->default(0); // 1 = adapt
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
        Schema::dropIfExists('pets');
    }
}
