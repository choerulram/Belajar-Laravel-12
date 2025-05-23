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
        // sintaks di bawah untuk membuat table product
        Schema::create('tb_product', function (Blueprint $table) {
            $table->id('id_product'); // defaultnya id
            $table->string('product_name', 150); // default lenght dari laravel 255
            $table->integer('price');
            $table->text('description');
            $table->string('id_category');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_product');
    }
};
