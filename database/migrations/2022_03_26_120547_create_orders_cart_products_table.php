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
        Schema::create('orders_cart_products', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('quantity');
            $table->foreignId('cart_id')->constrained('orders_cart')->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreignId('product_id')->constrained('products')->onUpdate('cascade')
            ->onDelete('cascade');
            $table->boolean('is_deleted')->default(0);
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
        Schema::dropIfExists('orders_cart_products');
    }
};
