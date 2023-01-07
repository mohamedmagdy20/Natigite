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
        Schema::create('subjects', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('school_name');
            $table->string('mangment_name');
            $table->string('national_number');
            $table->string('arabic');
            $table->string('english');
            $table->string('social');
            $table->string('algebra');
            $table->string('engineer');
            $table->string('math');
            $table->string('science');
            $table->string('total');
            $table->string('religin');
            $table->string('art');
            $table->string('computer');
            $table->string('sport');
            $table->string('status');
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
        Schema::dropIfExists('subjects');
    }
};
