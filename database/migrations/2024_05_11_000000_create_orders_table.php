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
            $table->string('product_price');
            $table->string('shipping_method');
            $table->enum('status', ['Entered', 'In Warehouse', 'On the Way', 'Received'])->default('Entered');



            $table->enum('payment', ['yes', 'no'])->default('no');
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
