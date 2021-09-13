<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePolicyCategoriesTable extends Migration
{
    public function up()
    {
        Schema::create('policy_categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('categories')->unique();
            $table->timestamps();
        });
    }
}