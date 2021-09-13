<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatisticCategoriesTable extends Migration
{
    public function up()
    {
        Schema::create('statistic_categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('categories')->unique();
            $table->timestamps();
        });
    }
}