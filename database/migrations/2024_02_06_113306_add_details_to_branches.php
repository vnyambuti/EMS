<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *   'name','address','company_id','city_id','state_id','country_id'
     */
    public function up(): void
    {
        Schema::table('branches', function (Blueprint $table) {
            $table->bigIncrements('id')->change();
            $table->string('name');
            $table->string('address')->nullable();
            $table->foreignId('company_id')->constrained()->cascadeOnUpdate();
            $table->foreignId('city_id')->constrained()->cascadeOnUpdate();
            $table->foreignId('state_id')->constrained()->cascadeOnUpdate();
            $table->foreignId('country_id')->constrained()->cascadeOnUpdate();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('branches', function (Blueprint $table) {
            //
        });
    }
};
