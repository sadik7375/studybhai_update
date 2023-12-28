<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->text("description");
            $table->string("image");
            $table->string("duration")->nullable();
            $table->string("price")->nullable();
            $table->string("discounted_price")->nullable();
            $table->string("timeline")->nullable();
            $table->string("class_starts")->nullable();
            $table->string("admission_ends")->nullable();
            $table->text("foundation")->nullable();
            $table->text("intermediate")->nullable();
            $table->text("advanced")->nullable();
            $table->string("availability")->nullable();
            $table->string("user_id");
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
        Schema::dropIfExists('courses');
    }
}
