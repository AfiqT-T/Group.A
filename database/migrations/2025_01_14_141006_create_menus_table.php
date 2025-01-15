<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenusTable extends Migration
{
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->string('menu_id', 10)->primary();  // Menu ID (e.g., 'M01')
            $table->string('menu_name', 200);  // Menu Name (e.g., 'Sizzling Yee Mee')
            $table->string('vendor_id', 10);  // Vendor ID (e.g., 'V01')
            $table->string('vendor_name',200);  // Vendor Name (e.g., 'Mahallah Ali Cafe')
            $table->decimal('price', 10, 2);  // Price (e.g., 7.00)
            $table->timestamps();  // For created_at and updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('menu');
    }
}
