@component('mail::message')

Ви здійснено замовлення на сайті Clothes-Shop!
<hr>
Замовлення № {{ $id }} <br>
Замовник: {{ $name }} <br>
Телефон: {{ $phone }} <br>
Спосіб доставки: {{ $shippingchoice }} <br>
Форма оплати: {{ $paymentmode }} <br>
Місто: {{ $city }} <br>
Адреса:{{ $adress }} <br>
Додатково: {{ $message }} <br>
Найближчим часом з Вами зв'яжеться відповідальний менеджер.
<hr>
Дякуемо,<br>
Clothes-Shop
@endcomponent
