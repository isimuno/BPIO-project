<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePensionersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pensioners', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('lastname');
            $table->string('sex');
            $table->date('date_of_birth');
            $table->integer('year_carer');
            $table-> decimal('amount_pension');
            $table->unsignedInteger('pension_type_id')->nullable();
            $table->foreign('pension_type_id')->references('id')->on('pension_types')->onDelete('cascade');
            $table->unsignedInteger('place_id');
            $table->foreign('place_id')->references('id')->on('places')->onDelete('cascade');
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
        Schema::drop('pensioners');
    }
}
