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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('cte_id');
            $table->string('image');
            $table->longText('small_description');
            $table->longText('description');
            $table->string('original_price');
            $table->string('selling_price');
            $table->tinyInteger('status')->default('0');
            $table->tinyInteger('trading')->default('0');
            $table->string('qty');
            $table->string('tax');
            $table->string('meta_title');
            $table->string('meta_descrip');
            $table->string('meta_keywords');

       
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
