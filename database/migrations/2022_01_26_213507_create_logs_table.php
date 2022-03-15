<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('logs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('device_id');
            $table->foreign('device_id')->references('id')->on('devices');
            $table->string('temperature');
            $table->string('tension');
            $table->string('storage');
            $table->string('up_time');
            $table->string('ip_lan');
            $table->string('ip_one');
            $table->string('ping');
            $table->string('status',1)->nullable(true);
            $table->boolean('isActif');
            $table->boolean('isDeleted');
            $table->integer('createdUserId');
            $table->integer('updatedUserId')->nullable(true);
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
        Schema::dropIfExists('logs');
    }
}
