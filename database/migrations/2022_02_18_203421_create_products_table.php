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
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();                           // алеас/псевдоним
            $table->string('short_description')->nullable();            // не обязательное свойство
            $table->text('description');                                // описание
            $table->text('sizes')->nullable();                          // размеры, через "," (парсить по ",")
            $table->decimal('sale_price');                              // розничная цена
            $table->decimal('discount')->nullable();                    // скидка
            $table->string('SKU');                                      // артикул-идентификатор
            $table->enum('stock_status', ['instock', 'outofstock']);    // наличие на складе [есть/нет]
            $table->boolean('featured')->default(false);                // эксклюзивный товар
            $table->unsignedInteger('quantity')->default(10);           // количество товара по умолчанию 10 шт
            $table->string('image')->nullable();                        // картинка не обяз
            $table->text('images')->nullable();                         // колекция картинок, через "," (парсить по ",")
            $table->bigInteger('category_id')->unsigned()->nullable();  // связь с категорией
            $table->bigInteger('brand_id')->unsigned()->nullable();     // связь с брендом
            $table->timestamps();
            // * связи
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign("brand_id")->references('id')->on('brands')->onDelete('cascade');

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
