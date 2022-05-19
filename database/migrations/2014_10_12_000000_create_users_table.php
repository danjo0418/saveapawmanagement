<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('role_id');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('fname');
            $table->string('mname');
            $table->string('lname');
            $table->string('address');
            $table->enum('gender',['male','female']);
            $table->date('birthday');
            $table->string('contact');
            $table->enum('own_pet',['yes','no']);
            $table->enum('status',['active','inactive']);
            $table->integer('is_delete')->default(0);
            $table->longText('profile')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
