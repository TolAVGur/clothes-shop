@section('title')
Кошик
@endsection

<section id="cart_items">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                <h3 style="color: #8a6d3b">Кошик</h3>
                            </div>
                            <div class="col-md-6">
                                <a href="/shop" class="btn btn-warning pull-right" style="margin-top: 10px;">
                                    Продовжити вибір
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        @if (Cart::instance('cart')->count() > 0)
                        <!-- cart_items -->
                        <div class="table-responsive cart_info">
                            @if (Session::has('message'))
                            <div class="alert alert-warning" role="alert">
                                {{ Session::get('message') }}
                            </div>
                            @endif
                            @if (Cart::instance('cart')->count() > 0)
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
                                    @foreach (Cart::instance('cart')->content() as $item)
                                    <tr>
                                        <td class="cart_product">
                                            <a href="{{ route('product.details', ['slug' => $item->model->slug]) }}">
                                                <img src="{{ asset('storage/images/shop') }}/{{$item->model->image}}" alt="{{$item->model->name}}">
                                            </a>
                                        </td>
                                        <td>
                                            <h4>{{ $item->model->name }}</h4>
                                            <hr>
                                            <span>
                                                <p><b>Знижка: </b>{{ $item->model->discount }}</p>
                                                <p>Код: {{ $item->model->SKU }}</p>
                                            </span>
                                            <hr>
                                        </td>
                                        <td class="cart_price">
                                            <p>{{$item->model->sale_price}}</p>
                                        </td>
                                        <td class="cart_quantity">
                                            <div class="cart_quantity_button">
                                                <a class="cart_quantity_up" href="#" wire:click.prevent="increaseQuantity('{{$item->rowId}}')"> + </a>
                                                <input class="cart_quantity_input" type="text" name="quantity" value="{{$item->qty}}"
                                                     autocomplete="off" >
                                                <a class="cart_quantity_down" href="#" wire:click.prevent="decreaseQuantity('{{$item->rowId}}')"> - </a>
                                            </div>
                                        </td>
                                        <td class="cart_total">
                                            <p class="cart_total_price">
                                                {{ $item->subtotal }}
                                            </p>
                                        </td>
                                        <td class="cart_delete">
                                            <a class="cart_quantity_delete" href="#" wire:click.prevent="destroy('{{$item->rowId}}')">
                                                <i class="fa fa-times-circle"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach

                                    <div class="shopper-informations">
                                        <div class="table-responsive cart_info">
                                            <table class="table table-condensed">
                                                <thead align="center">
                                                    <tr class="cart_menu">
                                                        <td>Спосіб доставки</td>
                                                        <td>Вміст у кошику</td>
                                                        <td>Вартість доставки</td>
                                                        <td>Разом</td>
                                                    </tr>
                                                </thead>
                                                <tbody style="text-align: center; margin: 2px; background: #f5f5f5; color: #8a6d3b">
                                                    <tr>
                                                        <td>
                                                            <select wire:model="checkshipping">
                                                                <option value="selfpickup">Самовивіз</a></option>
                                                                <option value="courier_kiev">Кур'єром по Києву</a></option>
                                                                <option value="across_ukr">Поштою по Україні</a></option>
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <p style="font-size: 18px;">{{ Cart::subtotal() }}</p>
                                                        </td>
                                                        <td>
                                                            <p style="font-size: 18px;">{{-- Cart::tax() --}}</p>
                                                        </td>
                                                        <td>
                                                            <h1 style="color: #FE980F;"> {{ Cart::total() }} </h1>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <div class="col-md-12" style="padding-bottom: 2%;">
                                                <a href="#" class="btn btn-success pull-right" wire:click.prevent="checkout()">
                                                    Замовити
                                                </a>
                                                <a href="#" class="btn btn-warning  pull-right" wire:click.prevent="destroyAll()">
                                                    Очистити
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </tbody>
                            </table>
                            @else
                            <div class="alert alert-warning" role="alert" style="text-align: center;">
                                <p>У кошику ще немає товарів!</p>
                            </div>
                            @endif
                            <!-- /cart_items -->
                        </div>
                        @else
                        <div class="alert alert-warning" role="alert" style="text-align: center;">
                            <h3>У кошику немає товарів!</h3>
                            <p>Щоб замовити товар або кілька товарів, додайте їх в кошик.</p>
                            <br><br>
                            <a href="/shop" class="btn btn-warning">
                                Перейти до вибору товара
                            </a>
                            <br><br>
                        </div>
                        @endif
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

<hr>