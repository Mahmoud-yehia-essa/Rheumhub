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
        Schema::create('application_forms', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('position')->nullable();
            $table->string('Work_Address')->nullable();
            $table->string('email')->nullable();
            $table->string('number')->nullable();
            $table->string('title')->nullable();
            $table->string('leader')->nullable();
            $table->text('members')->nullable();
            $table->text('objectives')->nullable();
            $table->text('description')->nullable();
            $table->text('start')->nullable();
            $table->text('end')->nullable();
            $table->text('pdescription')->nullable();
            $table->text('journal')->nullable();
            $table->text('grant')->nullable();



        
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('application_forms');
    }
};
