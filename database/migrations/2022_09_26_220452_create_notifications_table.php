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
        Schema::create('notifications', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            // $table->unsignedBigInteger('campaign_id');
            // $table->foreign('campaign_id')
            //     ->references('id')
            //     ->on('campaigns');

            // $table->unsignedBigInteger('user_id');
            // $table->foreign('user_id')
            //     ->references('id')
            //     ->on('users');
            
                $table->unsignedBigInteger('transaction_id');
            $table->foreign('transaction_id')
                ->references('id')
                ->on('transactions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notifications');
    }
};
