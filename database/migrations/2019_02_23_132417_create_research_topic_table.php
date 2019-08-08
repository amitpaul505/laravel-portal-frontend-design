<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResearchTopicTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Research Topic', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Name');
            $table->integer('Domain_ID')->unsigned();
            $table->string('Semester');
            $table->integer('Type_ID')->unsigned();
            $table->string('Level');
            $table->text('Description');
            $table->integer('Faculty_ID')->unsigned();
            $table->string('Status');
            $table->string('File_Status');




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
        Schema::dropIfExists('Research Topic');
    }
}
