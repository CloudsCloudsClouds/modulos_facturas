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
        Schema::create('identity', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->name();
            $table->middle_name();
            $table->second_name();
            $table->ci();
            $table->direction();
            $table->number();
            $table->birth_date();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('identity');
    }
};
