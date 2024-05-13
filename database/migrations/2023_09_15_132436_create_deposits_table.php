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
        Schema::create('deposits', function (Blueprint $table) {
            $table->id();
            $table->string("deposited_date");
            $table->string("client_info");
            $table->integer("amount");
            $table->unsignedBigInteger("unit_id")->nullable();
            $table->foreign('unit_id')->references('id')->on('units')->onDelete('set null')->onUpdate('cascade');
            $table->unsignedBigInteger("payment_id")->nullable();
            $table->foreign('payment_id')->references('id')->on('payments')->onDelete('set null')->onUpdate('cascade');
            $table->unsignedBigInteger("register_user")->nullable();
            $table->foreign('register_user')->references('id')->on('users')->onDelete('set null')->onUpdate('cascade');
            $table->string("other")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('deposits');
    }
};
