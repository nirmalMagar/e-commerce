<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChalanisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chalanis', function (Blueprint $table) {
            $table->id();
            $table->integer('_darta_no');
            $table->string('c_subject');
            $table->integer('c_year');
            $table->string('c_email');
            $table->integer('c_service');
            $table->string('c_p_office_name');
            $table->timestamp('c_date');
            $table->integer('c_mobile');
            $table->longText('c_comment');
            $table->integer('c_documents');
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
        Schema::dropIfExists('chalanis');
    }
}
