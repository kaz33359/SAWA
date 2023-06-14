<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('order_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('fkUser_id');
            $table->string('userName');
            $table->string('email');
            $table->string('mobile');
            $table->string('address');
            $table->string('state');
            $table->string('city');
            $table->integer('zip');
            $table->integer('grpid');
            $table->integer('totalAmount');
            $table->string('orderStatus');
            $table->string('paymentType');
            $table->string('payment_id');
            $table->string('paymentStatus');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_details');
    }
};
