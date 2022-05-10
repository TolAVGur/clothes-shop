<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShippingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shippings', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('order_id')->unsigned();      // id заказа
            $table->string('name');                          // имя юзера
            $table->string('phone');                         // телефон
            $table->string('email');                         // email
            $table->string('adress')->nullable();            // адрес доставки - не обяз
            $table->string('city')->nullable();              // город
            $table->string('zipcode');                       // индекс
            $table->timestamps();
            // -связь
            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shippings');
    }
}
