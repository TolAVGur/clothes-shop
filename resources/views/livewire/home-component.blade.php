@section('title')
Головна
@endsection

<div>
    <!--slider-->
    <section id="slider">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#slider-carousel" data-slide-to="1"></li>
                            <li data-target="#slider-carousel" data-slide-to="2"></li>
                        </ol>

                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="col-sm-6">
                                    <h1><span>E</span>-SHOPPER</h1>
                                    <h2>100% адаптивний дизайн</h2>
                                    <p>Тут рекламний текст рекламованого виробу чи акції</p>
                                    <button type="button" class="btn btn-default get">Отримайте зараз</button>
                                </div>
                                <div class="col-sm-6">
                                    <img src="{{ asset('storage/images/home/girl1.jpg') }}" class="girl img-responsive" alt="" />
                                    <img src="{{ asset('storage/images/home/pricing.png') }}" class="pricing" alt="" />
                                </div>
                            </div>

                            <div class="item">
                                <div class="col-sm-6">
                                    <h1><span>E</span>-SHOPPER</h1>
                                    <h2>100% адаптивний дизайн</h2>
                                    <p>Тут рекламний текст рекламованого виробу чи акції</p>
                                    <button type="button" class="btn btn-default get">Отримайте зараз</button>
                                </div>
                                <div class="col-sm-6">
                                    <img src="{{ asset('storage/images/home/girl2.jpg') }}" class="girl img-responsive" alt="" />
                                    <img src="{{ asset('storage/images/home/pricing.png') }}" class="pricing" alt="" />
                                </div>
                            </div>

                            <div class="item">
                                <div class="col-sm-6">
                                    <h1><span>E</span>-SHOPPER</h1>
                                    <h2>100% адаптивний дизайн</h2>
                                    <p>Тут рекламний текст рекламованого виробу чи акції</p>
                                    <button type="button" class="btn btn-default get">Отримайте зараз</button>
                                </div>
                                <div class="col-sm-6">
                                    <img src="{{ asset('storage/images/home/girl3.jpg') }}" class="girl img-responsive" alt="" />
                                    <img src="{{ asset('storage/images/home/pricing.png') }}" class="pricing" alt="" />
                                </div>
                            </div>
                        </div>

                        <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/slider-->

    <section>
        <div class="container">
            <!--features_items-->
            <div class="features_items">
                <h2 class="title text-center">топ продажів</h2>
                <div class="row">
                    @foreach ($products as $product)
                    <div class="col-md-3">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="my-card">
                                    <a href="{{ route('product.details', ['slug' => $product->slug]) }}">
                                        <div class="productinfo text-center">
                                            <h4>{{ $product->name }}</h4>
                                            <img src="{{ asset('storage/images/shop') }}/{{ $product->image}}" alt="{{ $product->name }}" />
                                            <h2>{{ $product->sale_price}}</h2>
                                            <h5>Знижка: {{ $product->discount }}</h5>
                                        </div>
                                    </a>
                                    <hr>
                                    <div style="text-align: center;">
                                        <button type="button" class="btn btn-warning" wire:click="store_to_cart({{$product->id}},'{{$product->name}}',{{$product->sale_price}})">
                                            <i class="fa fa-shopping-cart"></i>
                                            Додати в кошик
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

            </div>
            <hr>
            <!-- /features_items-->
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
</div>