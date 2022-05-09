<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schools', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('code')->unique()->nullable();
            $table->string('name')->unique();
            $table->string('avatar',200)->default('school.jpg');
            $table->tinyInteger('class_id')->unsigned()->index();
            $table->foreign('class_id')->references('id')->on('list_dropdowns')->onDelete('cascade');
            $table->tinyInteger('term_id')->unsigned()->index();
            $table->foreign('term_id')->references('id')->on('list_dropdowns')->onDelete('cascade');
            $table->tinyInteger('grading_id')->unsigned()->index();
            $table->foreign('grading_id')->references('id')->on('list_dropdowns')->onDelete('cascade');
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
        Schema::dropIfExists('schools');
    }
};
