<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNameFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('name_files', function (Blueprint $table) {
            $table->increments('id');
            $table->string('file');
            $table->string('type');
            $table->string('fileid');
            $table->string('extension');
            $table->integer('subject_id')->unsigned()->index();

          $table->foreign('subject_id')
                ->references('id')->on('subjects')
                ->onDelete('cascade');

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
        Schema::dropIfExists('name_files');
    }
}
