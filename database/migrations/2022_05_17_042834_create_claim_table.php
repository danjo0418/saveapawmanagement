<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClaimTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('claim', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pet_id');
            $table->integer('user_id');
            $table->string('filename');
            $table->string('witness_email')->nullable();
            $table->string('witness_name');
            $table->string('witness_contact');
            $table->integer('is_delete')->default(0); // 1 = claim 2 = deleted
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
        Schema::dropIfExists('claim');
    }
}
