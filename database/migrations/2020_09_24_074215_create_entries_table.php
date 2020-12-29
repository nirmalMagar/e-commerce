<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entries', function (Blueprint $table) {
            $table->id();
            $table->integer('d_darta_no');
            $table->string('subject');
            $table->unsignedBigInteger('year_id');
            $table->string('d_email');
            $table->unsignedBigInteger('sewa_id');
            $table->string('d_p_office_name');
            $table->timestamp('date');
            $table->integer('d_mobile');
            $table->longText('d_comment');
            $table->integer('d_documents');
            $table->timestamps();
            $table->foreign('year_id')->references('id')->on('years')->onDelete('cascade');
            $table->foreign('sewa_id')->references('id')->on('sewas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('entries');
    }
}
