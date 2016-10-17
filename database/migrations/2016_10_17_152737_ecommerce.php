<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Ecommerce extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_admin', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username');
            $table->string('password');
            $table->timestamps();
        });
        Schema::create('tb_category', function (Blueprint $table) {
            $table->increments('id');
            $table->string('category_name')->unique();
            $table->timestamps();
        });
        Schema::create('tb_member', function (Blueprint $table) {
            $table->increments('id');
            $table->string('member_name');
            $table->string('member_address');
            $table->string('member_tel');
            $table->string('member_email')->unique();
            $table->string('member_password');
            $table->timestamps();
        });
        Schema::create('tb_order', function (Blueprint $table) {
            $table->increments('id');
            $table->string('order_number')->unique();
            $table->string('member_name');
            $table->string('product_name');
            $table->string('category_name');
            $table->string('product_price');
            $table->timestamps();
        });
        Schema::create('tb_product', function (Blueprint $table) {
            $table->increments('id');
            $table->string('product_name')->unique();
            $table->string('category_name');
            $table->string('product_detail');
            $table->string('product_price');
            $table->string('product_warrant');
            $table->string('product_count');
            $table->string('product_picture');
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
        Schema::drop('tb_admin');
        Schema::drop('tb_category');
        Schema::drop('tb_member');
        Schema::drop('tb_order');
        Schema::drop('tb_product');
    }
}
