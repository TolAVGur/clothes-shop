@section('title')
Головна
@endsection

<section id="slider">
    <!--slider-->
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
                                <img src="images/home/girl1.jpg" class="girl img-responsive" alt="" />
                                <img src="images/home/pricing.png" class="pricing" alt="" />
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
                                <img src="images/home/girl2.jpg" class="girl img-responsive" alt="" />
                                <img src="images/home/pricing.png" class="pricing" alt="" />
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
                                <img src="images/home/girl3.jpg" class="girl img-responsive" alt="" />
                                <img src="images/home/pricing.png" class="pricing" alt="" />
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
        <div class="row">
            <div class="col-sm-3">
                <div class="left-sidebar">
                    <!--category-productsr-->
                    <h2>Категорії</h2>
                    <div class="panel-group category-products" id="accordian">
                        <!--category-productsr-->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordian" href="#sportswear">
                                        <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                        Спортивний одяг
                                    </a>
                                </h4>
                            </div>
                            <div id="sportswear" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <ul>
                                        <li><a href="#">Nike </a></li>
                                        <li><a href="#">Under Armour </a></li>
                                        <li><a href="#">Adidas </a></li>
                                        <li><a href="#">Puma</a></li>
                                        <li><a href="#">ASICS </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordian" href="#mens">
                                        <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                        Чоловікам
                                    </a>
                                </h4>
                            </div>
                            <div id="mens" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <ul>
                                        <li><a href="#">Fendi</a></li>
                                        <li><a href="#">Guess</a></li>
                                        <li><a href="#">Valentino</a></li>
                                        <li><a href="#">Dior</a></li>
                                        <li><a href="#">Versace</a></li>
                                        <li><a href="#">Armani</a></li>
                                        <li><a href="#">Prada</a></li>
                                        <li><a href="#">Dolce and Gabbana</a></li>
                                        <li><a href="#">Chanel</a></li>
                                        <li><a href="#">Gucci</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordian" href="#womens">
                                        <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                        Жінкам
                                    </a>
                                </h4>
                            </div>
                            <div id="womens" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <ul>
                                        <li><a href="#">Fendi</a></li>
                                        <li><a href="#">Guess</a></li>
                                        <li><a href="#">Valentino</a></li>
                                        <li><a href="#">Dior</a></li>
                                        <li><a href="#">Versace</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a href="#">Дітям</a></h4>
                            </div>
                        </div>
                    </div>
                    <!--/category-products-->

                    <div class="brands_products">
                        <!--brands_products-->
                        <h2>Бренди</h2>
                        <div class="brands-name">
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#"> <span class="pull-right">(50)</span>Acne</a></li>
                                <li><a href="#"> <span class="pull-right">(56)</span>Grüne Erde</a></li>
                                <li><a href="#"> <span class="pull-right">(27)</span>Albiro</a></li>
                                <li><a href="#"> <span class="pull-right">(32)</span>Ronhill</a></li>
                                <li><a href="#"> <span class="pull-right">(5)</span>Oddmolly</a></li>
                                <li><a href="#"> <span class="pull-right">(9)</span>Boudestijn</a></li>
                                <li><a href="#"> <span class="pull-right">(4)</span>Rösch creative culture</a></li>
                            </ul>
                        </div>
                    </div>
                    <!--/brands_products-->

                    <!--shipping-->
                    <div class="shipping text-center">
                        <img src="images/home/shipping.jpg" alt="" />
                    </div>
                    <!--/shipping-->
                </div>
            </div>

            <div class="col-sm-9 padding-right">
                <!--features_items-->
                <div class="features_items">
                    <h2 class="title text-center">топ продажів</h2>
                    <div class="row">
                        @foreach ($products as $product)
                        <div class="col-sm-4">
                            <ul class="product-image-wrapper">
                                <li class="single-products">
                                    <a href="{{ route('product.details', ['slug' => $product->slug]) }}">
                                        <div class="productinfo text-center">
                                            <img src="{{ asset('images/shop') }}/{{ $product->image}}" alt="{{ $product->name }}" />
                                            <h4>{{ $product->name }}</h4>
                                            <h2>{{ $product->sale_price}} грн</h2>
                                            <div style="text-align: left;">
                                                <p>{{ $product->short_description }}</p>
                                                <p>Розмір: {{ $product->sizes }}</p>
                                                <p>Наявність: {{ $product->stock_status }}</p>
                                                <p>Кількість: {{ $product->quantity }}</p>
                                                <h5>Знижка: {{ $product->discount }}</h5>
                                            </div>
                                        </div>
                                    </a>
                                    <hr>
                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Додати в кошик</a>
                                </li>
                            </ul>
                        </div>
                        @endforeach
                    </div>

                </div>
                <!--features_items-->

            </div>
        </div>
        <hr>
    </div>
</section>