<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdoptTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adopt', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pet_id');
            $table->integer('user_id');
            $table->integer('no_pet');
            $table->longText('reason');
            $table->string('id_type');
            $table->string('id_no');
            $table->string('filename');
            $table->integer('is_delete')->default(0); // 1 = adopt 2 = deleted
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
        Schema::dropIfExists('adopt');
    }
}
