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
        Schema::create('users', function (Blueprint $table) {
            $table->id()->from(1001);
            $table->timestamps();

            $table->string('name');
            $table->string('email')->unique(); //unekalni 
            $table->string('avatar')->nullable(); //mojet ne zopolnit
            $table->boolean('active')->default(true); // nachalni znachenie
            
            $table->string('password');
            $table->rememberToken();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
