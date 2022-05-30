@section('title')
Контакти
@endsection

<section>
    <div id="contact-page" class="container">
        <div class="bg">
            <div class="row">
                <div class="col-sm-3">
                    <div class="contact-info">
                        <h2 class="title text-center">Контактна інформація</h2>
                        <address>
                            <p>2222 Україна</p>
                            <p>Київ, вул.Вулична</p>
                            <p>будинок №1, 1 поверх</p>
                            <p>телефон: +38 067 111-11-11</p>
                            <p>Email: clothes.shop@domain.com</p>
                        </address>
                        <div class="social-networks">
                            <h2 class="title text-center">акаунти</h2>
                            <ul>
                                <li>
                                    <a href="https://www.facebook.com"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="https://www.youtube.com/"><i class="fa fa-youtube"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-9">
                    <div class="contact-form">
                        <h2 class="title text-center">Напишіть нам</h2>
                        <form wire:submit.prevent="feedbackMail" id="main-contact-form" class="contact-form row" name="contact-form">
                            @if(!Auth::check())
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" placeholder="Ваше ім'я" wire:model="name" required>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="email" class="form-control" placeholder="Email" wire:model="email" required>
                            </div>
                            @else
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" placeholder="{{Auth::user()->name}}"
                                        value="{{Auth::user()->name}}" wire:model="name" readonly>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="email" class="form-control" placeholder="{{Auth::user()->email}}"
                                    value="{{Auth::user()->email}}" wire:model="email" readonly>
                            </div>
                            @endif
                            <div class="form-group col-md-12">
                                <input type="text" class="form-control" placeholder="Тема" wire:model="subject" required>
                            </div>
                            <div class="form-group col-md-12">
                                <textarea name="message" id="message" class="form-control" rows="5" placeholder="Введіть ваше повідомлення" wire:model="message" required></textarea>
                            </div>
                            <div class="form-group col-md-11">
                                <button type="submit" class="btn btn-primary pull-right"> Надіслати </button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
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
    <!--/#contact-page-->
</section>