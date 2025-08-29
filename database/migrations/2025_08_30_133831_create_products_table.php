<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('Description');
            $table->bigInteger('CostPrice');
            $table->bigInteger('SellingPrice');
            $table->bigInteger('Stock');
        });
    }
    public function down(): void {
        Schema::dropIfExists('products');
    }
};
