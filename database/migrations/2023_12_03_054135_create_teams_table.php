<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("image");
            $table->string("institution");
            $table->string("profession");
            $table->string('email');
            $table->unsignedBigInteger('login_id');
            $table->string("expertise");
            $table->string("category");
            $table->string("address");
            $table->string("user_id");
            $table->string("t_id");
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
        Schema::dropIfExists('teams');
    }
}
