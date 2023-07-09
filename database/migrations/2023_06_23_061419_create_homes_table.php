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
        Schema::create('homes', function (Blueprint $table) {
            $table->id("User_id");
            $table->string("Owner_Name");
            $table->string("Mobile_Number");
            $table->string('Area_Name');
            $table->string("Address");
            $table->integer("Pin_Code");
            $table->integer("Price");
            $table->string("Status");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('homes');
    }
};