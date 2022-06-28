@section('title')
Оформление заказа
@endsection

<div>
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
                            <form wire:submit.prevent="placeOrder">
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
                                <div class="my-form-info row">
                                    @if(!Auth::check())
                                    <div class="col-md-12">
                                        <div class="alert alert-warning" role="alert" style="text-align: center;">
                                            <br><br>
                                            <h4>Для здійснення замовлення необхідно увійти до свого облікового запису або зареєструватися.</h4>
                                            <br>
                                            <h4><a class="btn btn-warning" href="{{ route('login') }}"><i class="fa fa-lock"></i> Увійти</a>
                                                <a class="btn btn-warning" href="{{ route('register') }}"><i class="fa fa-star"></i> Зареєструватись</a>
                                            </h4>
                                            <br><br>
                                        </div>
                                    </div>

                                    @else
                                    <div class="col-md-4">
                                        <!-- select payment-->
                                        <div>
                                            <p class="my-header-for-shipping" style="background: none;">Оплата:</p>
                                            <select wire:model="paymentmode" autofocus>
                                                <option value="cod" selected>Готівкою</a></option>
                                                <option value="card">Платіжною карткою</a></option>
                                                <option value="paypal"></a>Післяплатою</option>
                                            </select>
                                            @error('paymentmode')<span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                        <!-- info User -->
                                        <input type="text" value="{{Auth::user()->name}}" placeholder="{{Auth::user()->name}}" wire:model="name" readonly>
                                        <input type="text" value="{{Auth::user()->email}}" placeholder="{{Auth::user()->email}}" wire:model="email" readonly>
                                        <!-- info phone -->
                                        @if(Auth::user()->phone != 'no')
                                        <input type="text" value="{{Auth::user()->phone}}" placeholder="{{Auth::user()->phone}}" wire:model="phone" readonly>
                                        @else
                                        <input type="text" placeholder="Телефон *" wire:model="phone" required>
                                        @error('phone')<span class="text-danger">{{ $message }}</span> @enderror
                                        @endif
                                    </div>

                                    <div class="col-md-4">
                                        <!-- select shippingchoice-->
                                        <div>
                                            <p class="my-header-for-shipping" style="background: none;">Доставка:</p>
                                            <select wire:model="shippingchoice">
                                                <option value="selfpickup" selected>Самовивіз</a></option>
                                                <option value="courier_kiev">Кур'єром по Києву</a></option>
                                                <option value="across_ukr">Поштою по Україні</a></option>
                                            </select>
                                            @error('shippingchoice')<span class="text-danger">{{ $message }}</span> @enderror
                                        </div>

                                        @if ($shippingchoice == 'across_ukr')
                                        <input type="text" placeholder="Поштовий індекс *" wire:model="zipcode" required>
                                        <!-- як зробити обов'язковим? ------------------ ??????????????? -->
                                        <select wire:model="city" required>
                                            <option value="Kиїв" selected>Київ</option>
                                            <option value="Одеса">Одеса</option>
                                            <option value="Дніпро">Дніпро</option>
                                            <option value="Харків">Харків</option>
                                            <option value="Львів">Львів</option>
                                        </select>
                                        @error('city')<span class="text-danger">{{ $message }}</span> @enderror
                                        <input type="text" wire:model="adress" placeholder="Адреса *" required>
                                        @error('address')<span class="text-danger">{{ $message }}</span>@enderror

                                        @elseif ($shippingchoice == 'courier_kiev')
                                        <input type="text" wire:model="zipcode" placeholder="Індекс: 02222" value="02222" readonly>
                                        <input type="text" wire:model="city" placeholder="Kиїв" value="Kиїв" readonly>
                                        <input type="text" wire:model="adress" placeholder="Адреса *" required>
                                        @error('address')<span class="text-danger">{{ $message }}</span> @enderror
                                        @else
                                        <div style="text-align: center; padding:10px; background: #F0F0E9; height: 140px; font-size:12pt; border: 1px solid silver;">
                                            <em>
                                                <p>Видача замовлень здійснюєтся за адресою:</p>
                                            </em>
                                            <label>02222 Україна,<br>Київ, вул.Вулична, б.1, пов-1</label>
                                        </div>
                                        @endif
                                    </div>

                                    <div class="col-md-4">
                                        <div style="margin-top: 20px; margin-bottom: 10px">
                                            <textarea name="message" placeholder="Примітки до замовлення..." rows="4" wire:model="message"></textarea>
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
                                @endif
                                @if(Auth::check())
                                <div class="col-md-12" style="padding-bottom: 2%;">
                                    <!--  создать заказ и отправить на стр благодарности -->
                                    @if(Session::has('checkout'))
                                    <button type="submit" class="btn btn-success pull-right"> Замовити </button>
                                    @endif
                                    <a href="{{ route('product.cart')}}" class="btn btn-warning pull-right">Повернутись до кошику</a>
                                </div>
                                @endif

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
</div>