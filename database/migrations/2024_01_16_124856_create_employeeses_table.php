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
        Schema::create('employeeses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('address')->nullable();
            $table->foreignId('department_id')->constrained();
            $table->foreignId('city_id')->constrained();
            $table->foreignId('state_id')->constrained()->cascadeOnUpdate();
            $table->foreignId('country_id')->constrained()->cascadeOnUpdate();
            $table->string('zip')->nullable();
            $table->date('birthdate');
            $table->date('date_hired');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employeeses');
    }
};
