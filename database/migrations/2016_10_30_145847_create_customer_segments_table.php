<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerSegmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_segments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cs_title');
            $table->text('cs_desc');
            $table->integer('BMC_id')->unsigned();
            $table->foreign('BMC_id')->references('id')->on('BMCS')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::drop('customer_segments');
    }
}
