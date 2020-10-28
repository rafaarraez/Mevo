<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPricingAndTypeInReservationProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('reservation_products', function (Blueprint $table) {
            //
            $table->float('pricing', 255, 8)->nullable();
            $table->boolean('is_reserve')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('reservation_products', function (Blueprint $table) {
            //
        });
    }
}
