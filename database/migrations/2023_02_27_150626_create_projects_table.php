<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('preview')->nullable();
            $table->string('pic')->nullable();
            $table->string('video')->nullable();
            $table->string('title');
            $table->string('description', 750)->nullable();
            $table->smallInteger('status')->nullable();
            $table->smallInteger('is_vk')->nullable();
            $table->smallInteger('is_eng')->nullable();
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
        Schema::dropIfExists('projects');
    }
}
