<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('direction_categories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('direction_id')->constrained('directions')->onUpdate('cascade')->onDelete('cascade');
            $table->text('category_uz')->nullable();
            $table->text('category_en')->nullable();
            $table->text('category_ru')->nullable();
            $table->jsonb('sub_category');
            $table->string('pdf')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('direction_categories');
    }
};
