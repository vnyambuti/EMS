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
        Schema::create('departments_designation', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('department_id')->constrained();
            $table->foreignId('designation_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.  
     */
    public function down(): void
    {
        Schema::dropIfExists('departments_designation');
    }
};
