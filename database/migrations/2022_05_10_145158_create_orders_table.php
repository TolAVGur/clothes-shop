<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned();       // без знаковый
            $table->decimal('subtotal');                     // сумма
            $table->decimal('discount')->default(0);         // скидка по умолчанию 0
            $table->decimal('tax')->nullable();              // tax - доставка - не обяз
            $table->decimal('total');                        // к оплате
            $table->string('name');                          // имя юзера
            $table->string('phone');                         // телефон
            $table->string('email');                         // email
            $table->string('adress')->nullable();            // адрес доставки - не обяз
            $table->string('city')->nullable();              // город
            $table->string('zipcode');                       // индекс
            $table->enum('status', ['ordered', 'delivered', 'canceled'])->default('ordered'); // статус заказа 
            $table->timestamps();
            // -ключ к юзеру
            // Метод foreignId создает UNSIGNED BIGINT эквивалентный столбец:
            //$table->bigInteger('user_id')->unsigned();       // без знаковый
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
