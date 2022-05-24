@section('title')
Дякуемо
@endsection

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
                    <div class="alert alert-warning" role="alert" style="text-align: center;">
                        <h2>Дякуємо за ваше замовлення!</h2>
                        <h3>На вашу адресу електронної пошти надіслано повідомлення.</h3>
                        <p>Найближчим часом з вами зв'яжеться менеджер</p>
                        <br><br>
                        <a href="/shop" class="btn btn-warning">
                            Перейти до вибору товарів
                        </a>
                        <br><br>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
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