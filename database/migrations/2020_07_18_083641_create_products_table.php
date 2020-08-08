<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('brand', 50);
            $table->string('sku', 191);
            $table->string('name', 191);
            $table->string('slug', 191);
            $table->text('description')->nullable();
            $table->integer('quantity');
            $table->decimal('weight', 8, 2)->nullable();
            $table->decimal('price', 8, 2);
            $table->decimal('sale_price', 8, 2)->nullable();
            $table->tinyInteger('status')->default(1);
            $table->tinyInteger('featured')->default(0);
            $table->string('rating', 45)->nullable();
            $table->string('cover_image')->default('products/basket.jpg');
            $table->text('images')->nullable();
            $table->unsignedBigInteger('shop_id');

            $table->foreign('shop_id')->references('id')->on('shops')->onDelete('cascade');
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
        Schema::dropIfExists('products');
    }
}
