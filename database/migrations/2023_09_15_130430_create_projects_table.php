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
            $table->unsignedBigInteger("user_id");
            $table->unsignedBigInteger("project_manager")->nullable();
            $table->foreign('project_manager')->references('id')->on('users')->onDelete('set null')->onUpdate('cascade');
            $table->string("project_worker");
            $table->string("title");
            $table->integer("amount")->nullable();
            $table->integer("type_id")->nullable();
            $table->integer("progress_state");
            $table->integer("complete_state");
            $table->date("deadline")->nullable();
            $table->date("deposit")->nullable();
            $table->integer("invoice_id")->nullable();
            $table->string("remittance_address")->nullable();
            $table->string("project_comment")->nullable();
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
