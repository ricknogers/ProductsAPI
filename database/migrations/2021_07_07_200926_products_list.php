<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProductsList extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255)->nullable();
            $table->string('application', 255)->nullable();
            $table->string('market_association', 255)->nullable();
            $table->string('product_category', 500)->nullable();
            $table->string('product_range', 500)->nullable();
            $table->string('description_uses', 500)->nullable();
            $table->string('inci_name', 255)->nullable();
            $table->string('percent_active', 255)->nullable();
            $table->string('recommended_dosage', 255)->nullable();
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
