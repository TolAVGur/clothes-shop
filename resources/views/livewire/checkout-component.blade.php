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
                                <h4>Оформлення замовлення</h4>
                            </div>
                            <div class="col-md-6">
                                <a href="/shop" class="btn btn-warning pull-right">
                                    Продовжити вибір
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">

                        @if (Session::has('message'))
                        <div class="alert alert-warning" role="alert">
                            {{ Session::get('message') }}
                        </div>
                        @endif

                        <!-- cart_items -->
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
                                    @if (Cart::count() > 0)
                                    @foreach (Cart::content() as $item)
                                    <tr>
                                        <td class="cart_product">
                                            <a href="{{ route('product.details', ['slug' => $item->model->slug]) }}">
                                                <img src="{{ asset('storage/images/shop') }}/{{$item->model->image}}" alt="{{$item->model->name}}">
                                            </a>
                                        </td>
                                        <td>
                                            <h4>{{ $item->model->name }}</h4>
                                            <hr>
                                        </td>
                                        <td class="cart_price">
                                            <p>{{$item->model->sale_price}}</p>
                                        </td>
                                        <td class="cart_quantity">
                                            <div class="cart_quantity_button">
                                                <a class="cart_quantity_up" href="#" wire:click.prevent="increaseQuantity('{{$item->rowId}}')"> + </a>
                                                <input class="cart_quantity_input" type="text" name="quantity" value="{{$item->qty}}" autocomplete="off" size="2">
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
                                    @else
                                    <div class="alert alert-warning" role="alert" style="text-align: center;">
                                        <h3>У кошику немає товарів!</h3>
                                    </div>

                                    @endif
                                </tbody>
                            </table>

                            <div class="shopper-informations">
                                <p style="text-align: center; margin: 2px; background: #f5f5f5; color: #8a6d3b">Вибір доставки</p>
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
                                                    <select>
                                                        <option>Самовивіз</a></option>
                                                        <option>Кур'єром по Києву</a></option>
                                                        <option>Поштою по Україні</a></option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <p style="font-size: 18px;">{{ Cart::subtotal() }}</p>
                                                </td>
                                                <td>
                                                    <p style="font-size: 18px;">{{ Cart::tax() }}</p>
                                                </td>
                                                <td>
                                                    <h1 style="color: #FE980F;"> {{ Cart::total() }} </h1>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="row">
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
                                    <div class="col-md-12" style="padding-bottom: 2%;">
                                        <a href="#" class="btn btn-success pull-right">
                                            Замовити
                                        </a>
                                        <a href="#" class="btn btn-warning  pull-right" wire:click.prevent="destroyAll()">
                                            Очистити
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                    <!-- /cart_items -->

                </div>
            </div>
        </div>
    </div>
    <!-- / -->
    </div>
</section>