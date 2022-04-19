@section('title')
Опис виробу
@endsection

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="left-sidebar">
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
                </div>
            </div>
            <div class="col-sm-9 padding-right">
                <div class="product-details">
                    <!--product-details-->
                    <div class="col-sm-5">
                        <div class="view-product">
                            <img src="{{ asset('images/product-details/1.jpg') }}" alt="" />
                            <h3>ZOOM</h3>
                        </div>
                        <div id="similar-product" class="carousel slide" data-ride="carousel">

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="item active">
                                    <a href=""><img src="{{ asset('images/product-details/similar1.jpg') }}" alt=""></a>
                                    <a href=""><img src="{{ asset('images/product-details/similar2.jpg') }}" alt=""></a>
                                    <a href=""><img src="{{ asset('images/product-details/similar3.jpg') }}" alt=""></a>
                                </div>
                                <div class="item">
                                    <a href=""><img src="{{ asset('images/product-details/similar1.jpg') }}" alt=""></a>
                                    <a href=""><img src="{{ asset('images/product-details/similar2.jpg') }}" alt=""></a>
                                    <a href=""><img src="{{ asset('images/product-details/similar3.jpg') }}" alt=""></a>
                                </div>
                                <div class="item">
                                    <a href=""><img src="{{ asset('images/product-details/similar1.jpg') }}" alt=""></a>
                                    <a href=""><img src="{{ asset('images/product-details/similar2.jpg') }}" alt=""></a>
                                    <a href=""><img src="{{ asset('images/product-details/similar3.jpg') }}" alt=""></a>
                                </div>

                            </div>

                            <!-- Controls -->
                            <a class="left item-control" href="#similar-product" data-slide="prev">
                                <i class="fa fa-angle-left"></i>
                            </a>
                            <a class="right item-control" href="#similar-product" data-slide="next">
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </div>

                    </div>
                    <div class="col-sm-7">
                        <div class="product-information">
                            <!--/product-information-->
                            <img src="{{ asset('images/product-details/new.jpg') }}" class="newarrival" alt="" />
                            <h2>Опис виробу</h2>
                            <p>Web ID: 1089772</p>
                            <span>
                                <span>500 грн</span>
                                <label>Кількість:</label>
                                <input type="text" value="1" />
                                <button type="button" class="btn btn-fefault cart">
                                    <i class="fa fa-shopping-cart"></i>
                                    > Додати
                                </button>
                            </span>
                            <p><b>Доступність:</b> Є в наявності</p>
                            <p><b>Розміри:</b> m, l, xl, xxl</p>
                            <p><b>Бренд:</b> E-SHOPPER</p>

                        </div>
                        <!--/product-information-->
                    </div>
                </div>
                <!--/product-details-->

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
                                                <img src="{{ asset('images/home/recommend1.jpg') }}" alt="" />
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
                                                <img src="{{ asset('images/home/recommend2.jpg') }}" alt="" />
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
                                                <img src="{{ asset('images/home/recommend3.jpg') }}" alt="" />
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
                                                <img src="{{ asset('images/home/recommend1.jpg') }}" alt="" />
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
                                                <img src="{{ asset('images/home/recommend2.jpg') }}" alt="" />
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
                                                <img src="{{ asset('images/home/recommend3.jpg') }}" alt="" />
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
        </div>
        <hr>
    </div>

</section>