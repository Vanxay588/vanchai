<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToDownloadsTable extends Migration
{
    public function up()
    {
        Schema::table('downloads', function (Blueprint $table) {
            $table->unsignedBigInteger('categories_id');
            $table->foreign('categories_id', 'categories_fk_4299492')->references('id')->on('download_categories');
        });
    }
}