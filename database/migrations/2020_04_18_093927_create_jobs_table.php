<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("jobs", function (Blueprint $table) {
            $table->id();
            $table->string("reference");
            $table->string("employer");
            $table->string("title");
            $table->string("location");
            $table->string("salary");
            $table->string("post_date");
            $table->string("type");
            $table->string("description");
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
        Schema::dropIfExists("jobs");
    }
}
