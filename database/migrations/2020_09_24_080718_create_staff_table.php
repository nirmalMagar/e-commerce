<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff', function (Blueprint $table) {
            $table->id();
            $table->string('s_name');
            $table->string('s_email');
            $table->unsignedBigInteger('s_departmant');
            $table->string('s_nid');
            $table->bigInteger('s_mobile');
            $table->string('address');
            $table->string('s_district');
            $table->string('s_zone');
            $table->integer('s_pin');
            $table->string('s_password');
            $table->timestamps();
            $table->foreign('s_departmant')->references('id')->on('departmants')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('staff');
    }
}
