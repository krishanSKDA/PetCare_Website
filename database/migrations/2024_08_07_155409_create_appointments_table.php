<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->string('petowner_name');
            $table->string('pet_name');
            $table->string('pet_type');
            $table->date('appointment_date');
            $table->time('appointment_time');
            $table->string('petowner_email');
            $table->string('phone_number');
            $table->enum('service_required', ['Grooming', 'Vaccination', 'Checkup', 'Surgery']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
