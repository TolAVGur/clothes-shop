@section('title')
Оформление заказа
@endsection

<section id="cart_items">
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                <h3 style="color: #8a6d3b">Оформлення замовлення</h3>
                            </div>
                            <div class="col-md-6">
                                <a href="/shop" class="btn btn-warning pull-right" style="margin-top: 10px;">
                                    Продовжити вибір товарів
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        @if (Cart::instance('cart')->count() > 0)
                        <!-- cart_items -->
                        <form wire:prevent='placeOrder'>
                            <table class="table-striped" width="100%">
                                <thead class="my-header-for-shipping">
                                    <tr>
                                        <td><b>Список товарів в замовленні</b></td>
                                        <td><b>Ціна</b></td>
                                        <td><b>Кількість</b></td>
                                        <td><b>Усього</b></td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach (Cart::instance('cart')->content() as $item)
                                    <tr>
                                        <td>
                                            <p>{{ $item->model->name }}</p>
                                        </td>
                                        <td>
                                            <p>{{$item->model->sale_price}}</p>
                                        </td>
                                        <td>
                                            <p>{{$item->qty}}</p>
                                        </td>
                                        <td>
                                            <p>{{ $item->subtotal }}</p>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div style="text-align: right; margin-right: 50px;">
                                <p style="font-size: 16px;"><em>Сума у ​​кошику: </em><b>{{ Cart::subtotal() }}</b></p>
                            </div>
                            <!-- доставка/оплата -->
                            <div class="my-form-shipping-info row">
                                <div class="col-md-4">
                                    <div>
                                        <p class="my-header-for-shipping" style="background: none;">Оплата:</p>
                                        <select wire:model="paymentmode">
                                            <option value="cod">Готівкою</a></option>
                                            <option value="card">Платіжною карткою</a></option>
                                            <option value="paypal"></a>Післяплатою</option>
                                        </select>
                                    </div>
<!-- ЗАВЕСТИ В ИНПУТЫ ИНФУ ЮЗЕРА -->
                                    <input type="text" placeholder="ПІБ *" required wire:model="name">
                                    @error('name')
                                    <soan class="text-denger">{{ $message }}</soan>
                                    @enderror
                                    <input type="text" placeholder="Email *" required wire:model="email">
                                    @error('email')
                                    <soan class="text-denger">{{ $message }}</soan>
                                    @enderror
                                    <input type="text" placeholder="Телефон *" required wire:model="phone">
                                    @error('phone')
                                    <soan class="text-denger">{{ $message }}</soan>
                                    @enderror
                                </div>
                                <div class="col-md-4">
                                    <div>
                                        <p class="my-header-for-shipping" style="background: none;">Доставка:</p>
                                        <select wire:model="shippingchoice">
                                            <option value="selfpickup">Самовивіз</a></option>
                                            <option value="courier_kiev">Кур'єром по Києву</a></option>
                                            <option value="across_ukr">Поштою по Україні</a></option>
                                        </select>
                                    </div>

                                    @if ($shippingchoice == 'across_ukr')
                                    <input type="text" placeholder="Поштовий індекс" required wire:model="zipcode">
                                    <select wire:model="city">
                                        <option value="Kиїв">Київ</option>
                                        <option value="Одеса">Одеса</option>
                                        <option value="Дніпро">Дніпро</option>
                                        <option value="Харків">Харків</option>
                                        <option value="Львів">Львів</option>
                                    </select>
                                    <input type="text" placeholder="Адреса *" required wire:model="adress">
                                    @error('address')
                                    <soan class="text-denger">{{ $message }}</soan>
                                    @enderror
                                    @elseif ($shippingchoice == 'courier_kiev')
                                    <input type="text" placeholder="Індекс: 02222 Україна" readonly wire:model="zipcode" value="02222">
                                    <select wire:model="city">
                                        <option value="Kиїв">Київ</option>
                                    </select>
                                    <input type="text" placeholder="Адреса *" required wire:model="adress">
                                    @error('address')
                                    <soan class="text-denger">{{ $message }}</soan>
                                    @enderror
                                    @else
                                    <div style="text-align: center; padding:20px; background: #F0F0E9; height: 140px; font-size:14pt; border: 1px solid silver;">
                                        <p>Видача замовлень:</p>
                                        <em>
                                            <p>02222 Україна,<br>Київ, вул.Вулична, б.1, пов-1</p>
                                        </em>
                                    </div>
                                    @endif
                                </div>
                                <div class="col-md-4">
                                    <div style="margin-top: 20px; margin-bottom: 10px">
                                        <textarea name="message" placeholder="Примітки до замовлення..." rows="4" wire:model="notes_text"></textarea>
                                    </div>
                                    <table class="table-striped" width="100%">
                                        <thead style="text-align: center; color: #8a6d3b;">
                                            <tr>
                                                <td><em>Вартість доставки</em></td>
                                                <td><em>Разом</em></td>
                                            </tr>
                                        <tbody style="text-align: center; color: #8a6d3b">
                                            <td>
                                                <p style="font-size: 18px;">{{ Cart::tax() }}</p>
                                            </td>
                                            <td>
                                                <h2 style="color: #FE980F;"> {{ Session::get('checkout')['total'] }}</h2>
                                            </td>
                                        </tbody>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                            <!-- /доставка/оплата -->
                            <div class="col-md-12" style="padding-bottom: 2%;">
                                <!-- ??  создать заказ и отправить на стр благодарности -->
                                @if(Session::has('checkout'))
                                <button type="submit" class="btn btn-success pull-right"> Замовити </button>
                                @endif
                                <a href="#" class="btn btn-warning  pull-right">До кошику</a>
                            </div>
                        </form>
                    </div>
                    <!-- /cart_items -->
                    @else
                    <div class="alert alert-warning" role="alert" style="text-align: center;">
                        <h3>В кошику ще немає товарів для замовлення</h3>
                        <p>Щоб замовити товар або кілька товарів, додайте їх в кошик.</p>
                        <br><br>
                        <a href="/shop" class="btn btn-warning">
                            Перейти до вибору товарів
                        </a>
                        <br><br>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- / -->
    </div>
</section>

<section id="do_action">
    <div class="container">
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