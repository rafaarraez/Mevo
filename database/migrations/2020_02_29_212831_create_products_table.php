<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('synonymous')->nullable();
            $table->string('coa')->nullable();
            $table->string('msds')->nullable();
            $table->timestamp('deadline')->default(\DB::raw('CURRENT_TIMESTAMP'))->nullable();
            $table->timestamp('approximate_date')->default(\DB::raw('CURRENT_TIMESTAMP'))->nullable();
            $table->timestamp('arrival_to')->default(\DB::raw('CURRENT_TIMESTAMP'))->nullable();
            $table->string('quantity')->nullable();
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
        Schema::dropIfExists('products');
    }
}
