<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('enrolment', function (Blueprint $table) {
            $table->id();
            $table->date('date_enrolmentv');
            $table->float('mark');
            $table->unsignedBigInteger('id_course');
            $table->unsignedBigInteger('id_user');

            $table->foreign('id_user')->references('id')->on('users');
            $table->foreign('id_course')->references('id')->on('course');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enrolment');
    }
};
