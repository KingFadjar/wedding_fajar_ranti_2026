<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('rsvps', function (Blueprint $table) {
            $table->id();
            $table->string('name', 150);
            $table->string('institution', 150)->nullable();
            $table->enum('attendance', ['hadir', 'tidak_hadir', 'ragu'])->index();
            $table->unsignedTinyInteger('guest_count')->default(1);
            $table->text('message')->nullable();
            $table->string('ip_address', 45)->nullable();
            $table->string('user_agent', 500)->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('rsvps');
    }
};
