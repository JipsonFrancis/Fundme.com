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
        Schema::create('bank_details', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->unsignedBigInteger('payment_method_id');
            $table->foreign('payment_method_id')
                ->references('id')
                ->on('payment_methods');
                
            $table->unsignedBigInteger('donor_id');
            $table->foreign('donor_id')
                ->references('id')
                ->on('donors');

            $table->unsignedBigInteger('needie_id');
            $table->foreign('needie_id')
                ->references('id')
                ->on('needies');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bank_details');
    }
};
