@section('title')
Оформление заказа
@endsection


<section>
    <div class="container">
        <div class="row">
            <section id="cart_items">
                <div class="container">
                    <!--<div class="breadcrumbs">
                            <ol class="breadcrumb">
                              <li><a href="#">Home</a></li>
                              <li class="active">Check out</li>
                            </ol>
                        </div><!--/breadcrums-->

                    <div class="step-one">
                        <h2 class="heading">ШАГ 1: авторизация</h2>
                    </div>
                    <div class="checkout-options">
                        <h3>Новый пользователь</h3>
                        <p>Для оформления заказа, Вам необходимо зарегистрироваться или войти в свай аккаунт: </p>
                        <p>Checkout options</p>
                        <p>или</p>
                        <h3>Вы прошли авторизацию пользователя</h3>
                    </div>
                    <!--/checkout-options-->

                    <div class="step-one">
                        <h2 class="heading">ШАГ 2: проверка корзины</h2>
                    </div>
                    <div class="container row">
                        <div class="class col-ms-12">
                            <div class="table-responsive cart_info">
                                <table class="table table-condensed">
                                    <thead>
                                        <tr class="cart_menu">
                                            <td class="image">Изделие</td>
                                            <td class="description"></td>
                                            <td class="price">Цена</td>
                                            <td class="quantity">Количество</td>
                                            <td class="total">Всего</td>
                                            <td></td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="cart_product">
                                                <a href=""><img src="{{ asset('images/cart/one.png') }}" alt=""></a>
                                            </td>
                                            <td class="cart_description">
                                                <h4><a href="">Colorblock Scuba</a></h4>
                                                <p>Web ID: 1089772</p>
                                            </td>
                                            <td class="cart_price">
                                                <p>$59</p>
                                            </td>
                                            <td class="cart_quantity">
                                                <div class="cart_quantity_button">
                                                    <a class="cart_quantity_up" href=""> + </a>
                                                    <input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
                                                    <a class="cart_quantity_down" href=""> - </a>
                                                </div>
                                            </td>
                                            <td class="cart_total">
                                                <p class="cart_total_price">$59</p>
                                            </td>
                                            <td class="cart_delete">
                                                <a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                    <div class="step-one">
                        <h2 class="heading">ШАГ 3: выбор доставки</h2>
                    </div>
                    <div class="shopper-informations">
                        <div class="row" style="text-align: center">
                            <div class="order-message" style="margin-bottom: 50px;">
                                <div class="col-sm-4">
                                    <input type="radio" id="shipping_1" name="contact" value="">
                                    <label style="margin-right: 20px;" for="shipping_1"> Самовывоз</label>
                                </div>

                                <div class="col-sm-3">
                                    <input type="radio" id="shipping_2" name="contact" value="">
                                    <label style="margin-right: 20px;" for="shipping_2"> Курьером по Киеву</label>
                                </div>

                                <div class="col-sm-4">
                                    <input type="radio" id="shipping_3" name="contact" value="">
                                    <label for="shipping_3"> Почтой по Украине</label>
                                </div>
                            </div>
                            <div class="col-sm-8 clearfix">
                                <div class="bill-to">
                                    <div class="form-one">
                                        <form>
                                            <input type="text" placeholder="ФИО *">
                                            <input type="text" placeholder="Email *">
                                            <input type="text" placeholder="Телефон *">

                                        </form>
                                    </div>
                                    <div class="form-two">
                                        <form>
                                            <input type="text" placeholder="Почтовый индекс">
                                            <select>
                                                <option>-- Город --</option>
                                                <option>Киев</option>
                                                <option>Одесса</option>
                                                <option>Днепр</option>
                                                <option>Харьков</option>
                                                <option>Брвары</option>
                                                <option>Львов</option>
                                                <option>Переяслов</option>
                                                <option>Вышгород</option>
                                            </select>
                                            <input type="text" placeholder="Адресс *">
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="order-message">
                                    <textarea name="message" placeholder="Примечания к Вашему заказу. Особые требования к доставке..."></textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="step-one">
                        <h2 class="heading">ШАГ 4: Оформить заказ</h2>
                    </div>
                    <div class="col-sm-9">
                        <div class="total_area">
                            <ul>
                                <li>Доставка<span>0 грн</span></li>
                                <li>Всего <span>500 грн</span></li>

                            </ul>

                        </div>
                    </div>
                    <div class="col-sm-3">
                        <a class="btn btn-default check_out" href="">Заказать</a>
                    </div>
                </div>
            </section>
        </div>
</section>
<!--/#cart_items-->
</div>
<hr>
</div>

</section>