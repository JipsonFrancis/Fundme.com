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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            //$table->foreignId("campaign_id");

            $table->unsignedBigInteger('payment_method_id');
            $table->foreign('payment_method_id')
                ->references('id')
                ->on('payment_methods');

            $table->unsignedBigInteger('transaction_mode_id');
            $table->foreign('transaction_mode_id')
                ->references('id')
                ->on('transaction_modes');
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
};
