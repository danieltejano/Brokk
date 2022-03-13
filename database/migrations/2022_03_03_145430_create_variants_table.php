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
        Schema::create('variants', function (Blueprint $table) {
            $table->id();
            $table->string('name')->default('Unnamed Product Option');
            $table->string('type')->default('Object');
            $table->double('mark_up', 6,2)->default(0.00);
            $table->double('variant_cost', 6,2)->default(0.00);
            $table->double('stock',6,2)->default(0.00);
            $table->double('weight',6,2)->default(0.00)->nullable();
            $table->string('weight_unit')->default('kg')->nullable();
            $table->double('height',6,2)->default(0.00)->nullable();
            $table->string('height_unit')->default('kg')->nullable();
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
        Schema::dropIfExists('variants');
    }
};
