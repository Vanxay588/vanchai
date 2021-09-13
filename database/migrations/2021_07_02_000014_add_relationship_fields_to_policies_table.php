<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToPoliciesTable extends Migration
{
    public function up()
    {
        Schema::table('policies', function (Blueprint $table) {
            $table->unsignedBigInteger('categories_id');
            $table->foreign('categories_id', 'categories_fk_4299371')->references('id')->on('policy_categories');
        });
    }
}