<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('markets');
        Schema::create('markets', function (Blueprint $table) {
            $table->id();
            $table->string('marketName');
            $table->text('description');
            $table->string('marketImage')->nullable()->change();
            $table->text('linkedinURL');
            $table->string('orderNumber');


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
        Schema::dropIfExists('markets');
    }
}
