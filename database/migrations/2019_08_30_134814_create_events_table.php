<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->string('caption');
            $table->string('motive')->nullable();
            $table->string('contact')->nullable();
            $table->string('re')->nullable();
            $table->string('desc')->nullable();



            $table->string('ename')->nullable();
            $table->string('etitle')->nullable();
            $table->string('eabout')->nullable();
            $table->string('edate')->nullable();
            $table->string('etime')->nullable();



            $table->string('ename2')->nullable();
            $table->string('etitle2')->nullable();
            $table->string('eabout2')->nullable();
            $table->string('edate2')->nullable();
            $table->string('etime2')->nullable();



            $table->string('ename3')->nullable();
            $table->string('etitle3')->nullable();
            $table->string('eabout3')->nullable();
            $table->string('edate3')->nullable();
            $table->string('etime3')->nullable();



            $table->string('ename4')->nullable();
            $table->string('etitle4')->nullable();
            $table->string('eabout4')->nullable();
            $table->string('edate4')->nullable();
            $table->string('etime4')->nullable();



            $table->string('ename5')->nullable();
            $table->string('etitle5')->nullable();
            $table->string('eabout5')->nullable();
            $table->string('edate5')->nullable();
            $table->string('etime5')->nullable();



            $table->string('ename6')->nullable();
            $table->string('etitle6')->nullable();
            $table->string('eabout6')->nullable();
            $table->string('edate6')->nullable();
            $table->string('etime6')->nullable();



            $table->string('ename7')->nullable();
            $table->string('etitle7')->nullable();
            $table->string('eabout7')->nullable();
            $table->string('edate7')->nullable();
            $table->string('etime7')->nullable();



            $table->string('ename8')->nullable();
            $table->string('etitle8')->nullable();
            $table->string('eabout8')->nullable();
            $table->string('edate8')->nullable();
            $table->string('etime8')->nullable();



            $table->string('ename9')->nullable();
            $table->string('etitle9')->nullable();
            $table->string('eabout9')->nullable();
            $table->string('edate9')->nullable();
            $table->string('etime9')->nullable();



            $table->string('ename10')->nullable();
            $table->string('etitle10')->nullable();
            $table->string('eabout10')->nullable();
            $table->string('edate10')->nullable();
            $table->string('etime10')->nullable();



            $table->string('ename11')->nullable();
            $table->string('etitle11')->nullable();
            $table->string('eabout11')->nullable();
            $table->string('edate11')->nullable();
            $table->string('etime11')->nullable();



            $table->string('ename12')->nullable();
            $table->string('etitle12')->nullable();
            $table->string('eabout12')->nullable();
            $table->string('edate12')->nullable();
            $table->string('etime12')->nullable();



            $table->string('ename13')->nullable();
            $table->string('etitle13')->nullable();
            $table->string('eabout13')->nullable();
            $table->string('edate13')->nullable();
            $table->string('etime13')->nullable();



            $table->string('ename14')->nullable();
            $table->string('etitle14')->nullable();
            $table->string('eabout14')->nullable();
            $table->string('edate14')->nullable();
            $table->string('etime14')->nullable();



            $table->string('ename15')->nullable();
            $table->string('etitle15')->nullable();
            $table->string('eabout15')->nullable();
            $table->string('edate15')->nullable();
            $table->string('etime15')->nullable();




            $table->string('image');
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
        Schema::dropIfExists('events');
    }
}
