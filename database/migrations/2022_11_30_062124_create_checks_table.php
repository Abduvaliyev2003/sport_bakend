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
        Schema::create('checks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('direction_id')->constrained("directions")->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('direction_category_id')->constrained("direction_categories")->onDelete('cascade')->onUpdate('cascade');
            $table->string('direction_category_name')->nullable();
            $table->string('direction_category_name_answer')->nullable();
            $table->string('pdf')->nullable();
            $table->string('admin_permission')->nullable();
            $table->text('messages')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('checks');
    }
};
