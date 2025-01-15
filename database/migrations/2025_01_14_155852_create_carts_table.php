<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartsTable extends Migration
{
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->string('menu_id', 10);  // Menu ID reference
            $table->string('menu_name');  // Menu Name
            $table->string('vendor_id', 10);  // Vendor ID
            $table->string('vendor_name');  // Vendor Name
            $table->integer('quantity');  // Quantity of the item in the cart
            $table->decimal('price', 10, 2);  // Price of the menu item
            $table->timestamps();  // For created_at and updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('cart');

    }
}
