<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('stu_records', function (Blueprint $table) {
            $table->id();
            $table->foreignId('stu_id')->constrained('students')->cascadeOnDelete();
            $table->string('title');
            $table->string('description');
            $table->date('date');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('stu_records');
    }
};
