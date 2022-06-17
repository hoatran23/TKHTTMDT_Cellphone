<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class HnlProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('desc');
            $table->string('SKU');
            $table->integer('price');
            $table->integer('category_id')->unsigned(); // buộc phải là số nguyên
            $table->foreign('category_id')
                  ->references('id')
                  ->on('category')
                  ->onDelete('cascade'); // khi xóa 1 danh mục sp thì sẽ xóa toàn bộ mọi thứ liên quan đến sp đó
            $table->integer('inventory_id')->unsigned();
            $table->foreign('inventory_id')
                  ->references('id')
                  ->on('inventory')
                  ->onDelete('cascade'); 
            $table->integer('discount_id')->unsigned();
            $table->foreign('discount_id')
                  ->references('id')
                  ->on('discount')
                  ->onDelete('cascade'); 
            $table->timestamps("create_at");
            $table->timestamps("modified_at");
            $table->timestamps("delete_at");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hnl_products');
    }
}
