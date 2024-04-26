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
        Schema::create('offers', function (Blueprint $table) {
            $table->id();

            $table->string('name')->nullable();
            $table->text('des')->nullable();
            $table->text('place')->nullable();
            $table->string('type')->nullable();

            $table->string('offers_type_id')->nullable();
            $table->string('date')->nullable();
            $table->text('photo')->nullable();


            $table->string('start')->nullable();
            $table->string('end')->nullable();


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('offers');
    }
};
