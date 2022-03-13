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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreign('category_id');
            $table->string('id_number')->nullable();
            $table->sku('id_number')->nullable();
            $table->string('name')->default('Unnamed Product');
            $table->boolean('isRecurring')->default(false);
            $table->double('price', 10, 2)->nullable();
            $table->double('cost', 10, 2)->nullable();
            $table->double('weight', 10, 2)->nullable();
            $table->string('weight_unit')->default('kg');
            $table->string('description')->nullable();
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
};
