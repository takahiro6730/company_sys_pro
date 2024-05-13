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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("project_manager")->nullable();
            $table->foreign('project_manager')->references('id')->on('users')->onDelete('set null')->onUpdate('cascade');
            $table->string("project_worker");
            $table->string("title");
            $table->string("platform");
            $table->integer("amount");
            $table->unsignedBigInteger("unit_id")->nullable();
            $table->foreign('unit_id')->references('id')->on('units')->onDelete('set null')->onUpdate('cascade');
            $table->string("deadline");
            $table->string("progress");
            $table->string("other")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
