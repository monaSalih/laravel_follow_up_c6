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
        Schema::create('catogories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('photo');
            $table->enum('status',['activate','inactivate']);
            $table->integer('is_deleted')->default(0);
            //add coulmn
            $table->string('discription');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('catogories');
    }
};
