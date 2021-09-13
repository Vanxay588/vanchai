<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExaminationResultsTable extends Migration
{
    public function up()
    {
        Schema::create('examination_results', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('academic_years');
            $table->string('name');
            $table->timestamps();
        });
    }
}