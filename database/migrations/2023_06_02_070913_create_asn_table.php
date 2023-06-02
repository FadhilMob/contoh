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
        Schema::create('asn', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('bidang_id')->unsigned();
            $table->bigInteger('rhk_id')->unsigned();
            $table->string('nama');
            $table->integer('nip');
            $table->string('password');
            $table->string('image');
            $table->timestamps();

            $table->foreign('bidang_id')->references('id')->on('bidang')
                ->onDelete('cascade');
            $table->foreign('rhk_id')->references('id')->on('rhk')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('asn');
    }
};
