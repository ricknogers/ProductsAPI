<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('title');
            $table->string('application');
            $table->unsignedBigInteger('market_id');
            $table->foreign('market_id')->references('id')->on('markets');
            $table->text('description');
            $table->text('product_range');
            $table->string('inci_name');
            $table->string('percent_active');
            $table->string('recommended_dosage');
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
