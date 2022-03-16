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
            $table->id('id_product');
            $table->integer('amount');
            $table->string('name');
            $table->double('price');

            $table->biginteger('fk_id_category')->unsigned();
            $table->foreign('fk_id_category')
                ->references('id_category')
                ->on('categories');

            $table->biginteger('fk_id_supplier')->unsigned();
            $table->foreign('fk_id_supplier')
                ->references('id_supplier')
                ->on('suppliers');

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
