<?php

use App\Models\Picture;
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
        Schema::create('pictures', function (Blueprint $table) {
            $table->id();
            $table->string('alt')->unique();
            $table->string('path');
            $table->timestamps();
        });

        Schema::table('properties',function(Blueprint $table){
            $table->foreignIdFor(Picture::class)->constrained()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pictures');
    }
};
