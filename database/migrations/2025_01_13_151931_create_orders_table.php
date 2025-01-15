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
            $table->foreignId('user_id');
            $table->string('item_name');
            $table->integer('quantity');
            $table->decimal('price', 8, 2);
            $table->decimal('total_amount', 10, 2);
            $table->string('status');
            $table->timestamp('order_date');
            $table->timestamps();
        });
    }

        public function down()
    {
        Schema::dropIfExists('orders');
    }
};
