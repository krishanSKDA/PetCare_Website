<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('inventories', function (Blueprint $table) {
            $table->id();
            $table->string('product_name')->nullable();
            $table->string('product_picture')->nullable();
            $table->integer('quantity_in_stock')->default(0);
            $table->integer('reorder_level')->nullable();
            $table->integer('reorder_quantity')->nullable();
            $table->decimal('cost_per_unit', 8, 2)->nullable();
            $table->decimal('selling_price', 8, 2)->nullable();
            $table->decimal('profit', 8, 2)->nullable();
            $table->date('last_restocked_date')->nullable();
            $table->date('expiration_date')->nullable();
            $table->string('type')->nullable();
            $table->string('status')->default('active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventories');
    }
};
