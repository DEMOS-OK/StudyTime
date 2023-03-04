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
        Schema::dropIfExists('lesson');
        Schema::create('lesson', static function (Blueprint $table) {
            $table->id();
            $table->integer('subject_id');
            $table->index('subject_id');
            $table->integer('group_id');
            $table->index('group_id');
            $table->integer('teacher_id');
            $table->index('teacher_id');
            $table->integer('auditorium_id');
            $table->index('auditorium_id');

            $table->timestamp('datetime');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lesson');
    }
};
