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
        Schema::create('clients', function (Blueprint $table) {
            $table->id()->index();
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')
                    ->references('id')
                    ->on('users')
                    ->onUpdate('cascade');
            $table->string('nombres');
            $table->string('apellidos');
            $table->string('telefono', 10)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
