<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('position');
            $table->integer('type');
            $table->string('areas')->default('');
            $table->integer('location');
            $table->string('title');
            $table->string('description');
            $table->integer('c')->default(0);
            $table->integer('c++')->default(0);
            $table->integer('Java')->default(0);
            $table->integer('JavaScript')->default(0);
            $table->integer('HTML')->default(0);
            $table->integer('Python')->default(0);
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
        Schema::dropIfExists('jobs');
    }
}
