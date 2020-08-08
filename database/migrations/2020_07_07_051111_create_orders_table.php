<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('order_number');
            $table->unsignedBigInteger('user_id');
            $table->enum('status', ['pending', 'processing', 'completed', 'decline'])->default('pending');
            $table->decimal('grand_total', 20, 2);
            $table->integer('item_count');
            $table->boolean('is_paid')->default(false);
            $table->enum('payment_method', ['cash_on_delivery', 'direct_bank_transfer', 'paypal'])->default('cash_on_delivery');
            $table->string('shipping_fullname');
            $table->string('shipping_address');
            $table->string('shipping_city');
            $table->string('shipping_state');
            $table->string('shipping_zipcode');
            $table->string('shipping_phone', 20);
            $table->string('notes')->nullable();
            $table->string('billing_fullname', 45);
            $table->string('billing_address');
            $table->string('billing_city', 45);
            $table->string('billing_state', 45);
            $table->string('billing_phone', 20);

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('orders');
    }
}
