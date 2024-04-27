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
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique();
            $table->string('name')->unique();
            $table->foreignId('creator');
            $table->timestamps();

            $table->foreign('creator')->references('id')->on('users'); 
        });

        DB::table('roles')->insert([
            ['name' => 'Administrador', 'code' => 'ADMIN', 'creator' => 1],
            ['name' => 'Usuario', 'code' => 'USER', 'creator' => 1],
        ]);

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('roles');
    }
};
