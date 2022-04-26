<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHigherstudiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('higherstudies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('author_name');
            $table->string('author_description');
            $table->string('author_email');
            $table->string('article_header');
            $table->longText('article_body');
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
        Schema::dropIfExists('higherstudies');
    }
}
