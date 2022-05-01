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
                        <h2 class="heading">КРОК 1: авторизація</h2>
                    </div>
                    <div class="checkout-options">
                        <p>Для оформлення замовлення, Вам необхідно зареєструватися або увійти до акаунту: </p>
                        <p>або</p>
                        <h3>Ви пройшли авторизацію користувача</h3>
                    </div>
                    <!--/checkout-options-->

                    <div class="step-one">
                        <h2 class="heading">КРОК 2: перевірка кошика</h2>
                    </div>
                    <div class="container row">
                        <div class="class col-ms-12">
                            <div class="table-responsive cart_info">
                                <table class="table table-condensed">
                                    <thead>
                                        <tr class="cart_menu">
                                            <td class="image">Виріб</td>
                                            <td class="description"></td>
                                            <td class="price">Ціна</td>
                                            <td class="quantity">Кількість</td>
                                            <td class="total">Усього</td>
                                            <td></td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="cart_product">
                                                <a href=""><img src="{{ asset('storage/images/cart/one.png') }}" alt=""></a>
                                            </td>
                                            <td class="cart_description">
                                                <h4><a href="">тут короткий опис виробу</a></h4>
                                                <p>Web ID: 1089772</p>
                                            </td>
                                            <td class="cart_price">
                                                <p>500 грн</p>
                                            </td>
                                            <td class="cart_quantity">
                                                <div class="cart_quantity_button">
                                                    <a class="cart_quantity_up" href=""> + </a>
                                                    <input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
                                                    <a class="cart_quantity_down" href=""> - </a>
                                                </div>
                                            </td>
                                            <td class="cart_total">
                                                <p class="cart_total_price">500 грн</p>
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
                        <h2 class="heading">КРОК 3: вибір доставки</h2>
                    </div>
                    <div class="shopper-informations">
                        <div class="row" style="text-align: center">
                            <div class="order-message" style="margin-bottom: 50px;">
                                <div class="col-sm-4">
                                    <input type="radio" id="shipping_1" name="contact" value="">
                                    <label style="margin-right: 20px;" for="shipping_1"> Самовивіз</label>
                                </div>

                                <div class="col-sm-3">
                                    <input type="radio" id="shipping_2" name="contact" value="">
                                    <label style="margin-right: 20px;" for="shipping_2"> Кур'єром по Києву</label>
                                </div>

                                <div class="col-sm-4">
                                    <input type="radio" id="shipping_3" name="contact" value="">
                                    <label for="shipping_3"> Поштою по Україні</label>
                                </div>
                            </div>
                            <div class="col-sm-8 clearfix">
                                <div class="bill-to">
                                    <div class="form-one">
                                        <form>
                                            <input type="text" placeholder="ПІБ *">
                                            <input type="text" placeholder="Email *">
                                            <input type="text" placeholder="Телефон *">

                                        </form>
                                    </div>
                                    <div class="form-two">
                                        <form>
                                            <input type="text" placeholder="Поштовий індекс">
                                            <select>
                                                <option>-- Місто --</option>
                                                <option>Київ</option>
                                                <option>Одеса</option>
                                                <option>Дніпро</option>
                                                <option>Харків</option>
                                                <option>Брвари</option>
                                                <option>Львів</option>
                                                <option>Переслів</option>
                                                <option>Вишгород</option>
                                            </select>
                                            <input type="text" placeholder="Адреса *">
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="order-message">
                                    <textarea name="message" placeholder="Примітки до замовлення. Особливі вимоги до доставки..."></textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="step-one">
                        <h2 class="heading">КРОК 4: Оформити замовлення</h2>
                    </div>
                    <div class="col-sm-9">
                        <div class="total_area">
                            <ul>
                                <li>Доставка<span>0 грн</span></li>
                                <li>Всього <span>500 грн</span></li>
                            </ul>

                        </div>
                    </div>
                    <div class="col-sm-3">
                        <a class="btn btn-default check_out" href="">Замовити</a>
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