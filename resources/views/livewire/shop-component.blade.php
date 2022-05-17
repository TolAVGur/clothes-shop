@section('title')
Каталог товарів
@endsection

<!-- рекламный баннер-->
<section id="advertisement">
    <div class="container">
        <img src="{{ asset('storage/images/shop/advertisement.jpg') }}" alt="" />
    </div>
</section>
<!--/рекламный баннер-->

<section>
    <div class="container">
        <div class="row">
            <!-- left-sidebar-->
            <div class="col-sm-3">
                <div class="left-sidebar">
                    <!-- category-products -->
                    <div class="panel-group category-products">
                        <h2>Всі категорії</h2>
                        <div class="panel panel-default">
                            @foreach ($categories as $category)
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a href="{{ route('product.category',['category_slug'=>$category->slug]) }}">
                                        <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                        {{ $category->name }}
                                    </a>
                                </h4>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <!--/category-products-->

                    <!--brands_products-->
                    <div class="brands_products">
                        <h2>Всі Бренди</h2>
                        <div class="brands-name">
                            <ul class="nav nav-pills nav-stacked">
                                <li>
                                    @foreach ($brands as $brand)
                                    <a href="{{ route('product.brand',['brand_id'=>$brand->id]) }}"><span class="pull-right">(50)</span>{{ $brand->name }}</a>
                                    @endforeach
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--/brands_products-->
                </div>
            </div>
            <!--/left-sidebar-->

            <!-- right-sidebar-->
            <div class="col-sm-9 padding-right">
                <h2 class="title text-center">Каталог</h2>

                <div class="row" style="margin-bottom: 24px;">
                    <div class="col-sm-2">
                        <p align="right"> Фільтрування: </p>
                    </div>
                    <div class="col-sm-3">
                        <select name="orderby" class="use-chosen" wire:model="sorting">
                            <option value="menu_order">за замовчуванням</option>
                            <option value="date">за новизною</option>
                            <option value="price">ціна: за зростанням</option>
                            <option value="price-desc">ціна: за зменшенням</option>
                        </select>
                    </div>
                    <div class="col-sm-2">
                        <select class="use-chosen" wire:model="pagesize">
                            <option value="3" selected="selected">3 на сторінці</option>
                            <option value="6">6 на сторінці</option>
                            <option value="9">9 на сторінці</option>
                            <option value="12">12 на сторінці</option>
                            <option value="15">15 на сторінці</option>
                            <option value="18">18 на сторінці</option>
                            <option value="21">21 на сторінці</option>
                        </select>
                    </div>

                </div>
                <hr>
                <!--end wrap shop control-->
                <div class="features_items">
                    <!--features_items-->

                    <div class="row">
                        @foreach ($products as $product)
                        <div class="col-md-4">
                            <div class="card">
                                <ul class="product-image-wrapper">
                                    <li class="single-products">
                                        <div class="my-card">
                                            <a href="{{ route('product.details', ['slug' => $product->slug]) }}">
                                                <div class="productinfo text-center">
                                                    <img src="{{ asset('storage/images/shop') }}/{{ $product->image}}" alt="{{ $product->name }}" />
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
                                        </div>
                                        <hr>
                                        <div style="text-align: center;">
                                            <button type="button" class="btn btn-warning" wire:click.prevent="store_to_cart({{$product->id}},'{{$product->name}}',{{$product->sale_price}})">
                                                <i class="fa fa-shopping-cart"></i>
                                                > Додати в кошик
                                            </button>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    <div style="margin-top: 15px; text-align: center;">
                        {{ $products->links() }}
                    </div>
                    <hr>

                    {{--
                    <ul class="pagination">
                        
                        <li class="active"><a href="">1</a></li>
                        <li><a href="">2</a></li>
                        <li><a href="">3</a></li>
                        <li><a href="">&raquo;</a></li>
                       
                    </ul>
                    --}}
                </div>
                <!--features_items-->
            </div>
            <!-- /right-sidebar-->
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