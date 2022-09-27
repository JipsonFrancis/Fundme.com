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
        Schema::create('individual_campaigns', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

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
        Schema::dropIfExists('individual_campaigns');
    }
};
