<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable(false);
            $table->string('adress_zip_code');
            $table->string('adress_country');
            $table->string('adress_street');
            $table->string('adress_number');
            $table->string('reference');
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
        Schema::dropIfExists('customers');
    }
}
