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
            $table->bigIncrements('id');
            $table->string('email');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('name');
            $table->string('phone');
            $table->string('address')->nullable();
            $table->foreignId('city_id')->constrained();
            $table->foreignId('state_id')->constrained()->cascadeOnUpdate();
            $table->foreignId('country_id')->constrained()->cascadeOnUpdate();
            $table->string('zip')->nullable();
            $table->date('birthdate');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->rememberToken();
            $table->timestamps();
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
