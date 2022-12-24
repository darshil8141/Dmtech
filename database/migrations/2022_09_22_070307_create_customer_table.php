<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer', function (Blueprint $table) {
            $table->id('customer_id');
            $table->string('name');
            $table->string('email')->unique();
            $table->enum('gender',["Male","Female","Other"])->nullable();
            $table->text('address');
            $table->date('dob')->nullable();
            $table->string('password');
            $table->boolean('status')->default(1);
            $table->integer('points')->default(0);
            $table->timestamps(); //create_at updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customer');
    }
};
