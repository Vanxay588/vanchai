<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToStatisticsTable extends Migration
{
    public function up()
    {
        Schema::table('statistics', function (Blueprint $table) {
            $table->unsignedBigInteger('categories_id');
            $table->foreign('categories_id', 'categories_fk_4816331')->references('id')->on('statistic_categories');
        });
    }
}