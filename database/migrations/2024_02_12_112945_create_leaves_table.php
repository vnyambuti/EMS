<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *      'ltid','from','to','days','remainig','empid'
     */
    public function up(): void
    {
        Schema::create('leaves', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('leavetype_id')->nullable();
            $table->foreign('leavetype_id')->references('id')->on('leave_types')->onDelete(null);
            $table->string('from');
            $table->string('to');
            $table->foreignId('employeese_id')->constrained()->cascadeOnUpdate();
            $table->string('days');
            $table->string('remaining');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leaves');
    }
};
