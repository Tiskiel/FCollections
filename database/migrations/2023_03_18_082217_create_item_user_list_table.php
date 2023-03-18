<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('item_user_list', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('item_id');
        $table->foreign('item_id')->references('id')->on('items')->onDelete('cascade');
        $table->unsignedBigInteger('user_list_id');
        $table->foreign('user_list_id')->references('id')->on('user_lists')->onDelete('cascade');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('item_user_list');
    }
};
