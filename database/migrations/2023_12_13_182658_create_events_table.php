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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->enum('subscription',['free','paid'])->default('free');
            $table->string('price')->nullable();
            $table->enum('place',['kuwait','outside_kuwait'])->default('kuwait');
           // $table->string('coupon')->nullable();
            $table->enum('role',['permanent','associate','affiliate','all'])->default('all');
            $table->string('photo')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
