<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTreeOfKnowledgesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tree_of_knowledges', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('parent_id');
            $table->boolean('is_folder');
            $table->integer('article_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tree_of_knowledges');
    }
}
