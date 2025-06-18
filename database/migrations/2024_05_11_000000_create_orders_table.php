<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('tracking_number')->unique();
            $table->string('product_name');
            $table->decimal('product_price', 10, 2);
            $table->string('shipping_method');
            $table->enum('status', ['Pending', 'In Transit', 'Delivered'])->default('Pending');
            $table->string('file')->nullable();
            $table->string('total_price')->nullable();
            $table->string('whole')->nullable();
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('orders');
    }
};
