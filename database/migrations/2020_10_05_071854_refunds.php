<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Refunds extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('refunds', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->integer('booking_id');
            $table->string('description');
            $table->boolean('status')->nullable();
            $table->datetime('refund_date');

         });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::dropIfExists('refunds');
    }
}
