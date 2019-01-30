<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ads_title');
            $table->tinyInteger('color')->nullable();
            $table->tinyInteger('body_type')->nullable();
            $table->integer('km_driven');
            $table->float('price');
            $table->tinyInteger('transmission');
            $table->tinyInteger('drivetrain');
            $table->tinyInteger('fuel');
            $table->string('cylinder_count', 30)->nullable();
            $table->tinyInteger('seats_number')->nullable();
            $table->tinyInteger('doors_number')->nullable();
            $table->longText('note')->nullable();
            $table->tinyInteger('for_sale_rent');
            $table->tinyInteger('level')->default(1);
            $table->boolean('visibility')->default(1);
            $table->boolean('status')->default(0);
            $table->integer('customer_id')->unsigned();
            $table->foreign('customer_id')->references('id')->on('customers')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('address_id')->unsigned()->nullable();
            $table->foreign('address_id')->references('id')->on('addresses');
            $table->integer('engine_id')->unsigned();
            $table->foreign('engine_id')->references('id')->on('engines')->onDelete('cascade');
            $table->integer('brand_id')->unsigned();
            $table->foreign('brand_id')->references('id')->on('brands')->onDelete('cascade');
            $table->integer('user_id')->unsigned()->nullable();
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
        Schema::dropIfExists('cars');
    }
}
