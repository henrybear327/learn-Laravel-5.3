<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicantTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicant', function (Blueprint $table) {

            $table->integer('id')->unique();
            $table->foreign('id')
                ->references('id')->on('users')
                ->onDelete('cascade');

            $table->string('ChineseName', 100);
            $table->string('EnglishName', 100);
            $table->integer('studentID')->unique();

            $table->timestamps();

            $table->primary('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('applicant');
    }
}
