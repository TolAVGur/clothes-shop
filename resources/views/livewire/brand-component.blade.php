@section('title')
Каталог
@endsection

<div>
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
                                        <a href="{{ route('product.brand',['brand_id'=>$brand->id]) }}">
                                            <span class="pull-right">(50)</span>{{ $brand->name }}</a>
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
                    <h2 class="title text-center">Бренд "{{ $brand_name }}"</h2>

                    <!-- features_items -->
                    <div class="row">
                        @foreach ($products as $product)
                        <div class="col-md-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="my-card">
                                        <a href="{{ route('product.details', ['slug' => $product->slug]) }}">
                                            <div class="productinfo text-center">
                                                <h4>{{ $product->name }}</h4>
                                                <img src="{{ asset('storage/images/shop') }}/{{ $product->image}}" alt="{{ $product->name }}" />
                                                <h2>{{ $product->sale_price}}</h2>
                                                <p>Категорія:
                                                    @foreach ($categories as $category)
                                                    @if ($product->category_id == $category->id )
                                                    {{ $category->name }}
                                                    @endif
                                                    @endforeach
                                                    <br>Бренд:
                                                    {{ $brand_name }}
                                                </p>
                                                <h5>Знижка: {{ $product->discount }}</h5>
                                            </div>
                                        </a>
                                        <div style="text-align: center;">
                                            <button type="button" class="btn btn-warning" wire:click.prevent="store_to_cart({{$product->id}},'{{$product->name}}',{{$product->sale_price}})">
                                                <i class="fa fa-shopping-cart"></i>
                                                > Додати в кошик
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <!--features_items-->
                    <div class="wrap-pagination-info">
                        {{ $products->render('pagination::bootstrap-4') }}
                    </div>
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
</div>