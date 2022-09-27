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
        Schema::create('group_campaigns', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->unsignedBigInteger('social_worker_id');
            $table->foreign('social_worker_id')
                ->references('id')
                ->on('social_workers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('group_campaigns');
    }
};
