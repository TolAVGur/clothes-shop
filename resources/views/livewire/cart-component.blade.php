@section('title')
Кошик
@endsection

<section id="cart_items">
    <div class="container">
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

                    <tr>
                        <td class="cart_product">
                            <a href=""><img src="{{ asset('storage/images/cart/two.png') }}" alt=""></a>
                        </td>
                        <td class="cart_description">
                            <h4><a href="">тут короткий опис виробу</a></h4>
                            <p>Web ID: 1089772</p>
                        </td>
                        <td class="cart_price">
                            <p>100 грн</p>
                        </td>
                        <td class="cart_quantity">
                            <div class="cart_quantity_button">
                                <a class="cart_quantity_up" href=""> + </a>
                                <input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
                                <a class="cart_quantity_down" href=""> - </a>
                            </div>
                        </td>
                        <td class="cart_total">
                            <p class="cart_total_price">100 грн</p>
                        </td>
                        <td class="cart_delete">
                            <a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
                        </td>
                    </tr>

                    <tr>
                        <td class="cart_product">
                            <a href=""><img src="{{ asset('storage/images/cart/three.png') }}" alt=""></a>
                        </td>
                        <td class="cart_description">
                            <h4><a href="">тут короткий опис виробу</a></h4>
                            <p>Web ID: 1089772</p>
                        </td>
                        <td class="cart_price">
                            <p>200 грн</p>
                        </td>
                        <td class="cart_quantity">
                            <div class="cart_quantity_button">
                                <a class="cart_quantity_up" href=""> + </a>
                                <input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
                                <a class="cart_quantity_down" href=""> - </a>
                            </div>
                        </td>
                        <td class="cart_total">
                            <p class="cart_total_price">200 грн</p>
                        </td>
                        <td class="cart_delete">
                            <a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>
<!--/#cart_items-->
<section id="do_action">
    <div class="container">
        <h4 style="text-align: center;"> Тут Ви можете порахувати вартість товарів у кошику, включаючи доставку:</h4>
        <div class="row">
            <div class="col-sm-12">
                <div class="total_area">
                    <ul>
                        <li>Разом у кошику<span>800 грн </span></li>
                        <li>
                            <div class="row">
                                <div class="col-sm-4">
                                    <input type="radio" id="shipping_1" name="contact" value="">
                                    <label style="margin-right: 20px;" for="shipping_1"> Самовивіз</label>
                                </div>

                                <div class="col-sm-4">
                                    <input type="radio" id="shipping_2" name="contact" value="">
                                    <label style="margin-right: 20px;" for="shipping_2"> Кур'єром по Києву</label>
                                </div>

                                <div class="col-sm-4">
                                    <input type="radio" id="shipping_3" name="contact" value="">
                                    <label for="shipping_3"> Поштою по Україні</label>
                                </div>
                            </div>

                        </li>
                        <li class="single_field">
                            <select>
                                <option>Голосіївський</option>
                                <option>Святошинський</option>
                                <option>Солом'янський</option>
                                <option>Оболонський</option>
                                <option>Подільський</option>
                                <option>Печерський</option>
                                <option>Шевченківський</option>
                                <option>Дарницький</option>
                                <option>Дніпровський</option>
                                <option>Деснянський</option>
                            </select>
                        </li>

                        <li>Доставка<span>100 грн</span></li>
                        <li>Усього, разом з доставкою <span>900 грн </span></li>
                    </ul>
                    <div style="text-align: center;">
                        <a class="btn btn-default update" href="">Очистить</a>
                        <a class="btn btn-default check_out" href="">Оформить заказ</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="recommended_items">
            <!--recommended_items-->
            <h2 class="title text-center">рекомендовані товари</h2>

            <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="item active">
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src="{{ asset('storage/images/home/recommend1.jpg') }}" alt="" />
                                        <h2>500 грн</h2>
                                        <p>Опис виробу</p>
                                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i> Додати в кошик</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src="{{ asset('storage/images/home/recommend2.jpg') }}" alt="" />
                                        <h2>500 грн</h2>
                                        <p>Опис виробу</p>
                                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i> Додати в кошик</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src="{{ asset('storage/images/home/recommend3.jpg') }}" alt="" />
                                        <h2>500 грн</h2>
                                        <p>Опис виробу</p>
                                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i> Додати в кошик</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src="{{ asset('storage/images/home/recommend1.jpg') }}" alt="" />
                                        <h2>500 грн</h2>
                                        <p>Опис виробу</p>
                                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i> Додати в кошик</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src="{{ asset('storage/images/home/recommend2.jpg') }}" alt="" />
                                        <h2>500 грн</h2>
                                        <p>Опис виробу</p>
                                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i> Додати в кошик</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src="{{ asset('storage/images/home/recommend3.jpg') }}" alt="" />
                                        <h2>500 грн</h2>
                                        <p>Опис виробу</p>
                                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i> Додати в кошик</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
                    <i class="fa fa-angle-left"></i>
                </a>
                <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
                    <i class="fa fa-angle-right"></i>
                </a>
            </div>
        </div>
        <!--/recommended_items-->


    </div>
</section>
<!--/#do_action-->

<hr>