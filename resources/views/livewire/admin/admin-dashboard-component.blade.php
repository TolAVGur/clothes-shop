@section('title')
Адмін панель
@endsection

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default" align="center" style="margin-bottom: 300px;">
                <div class="panel-heading">
                    <h4 style="color: #8a6d3b">Панель управління адміністратора сайту "Clothes-Shop"</h4>
                </div>

                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-4">
                            <a class="btn btn-success btn_adminpanel" href="#">Користувачи</a>
                            <a class="btn btn-warning btn_adminpanel" href="{{ route('admin.products') }}">Товари</a>
                        </div>
                        <div class="col-sm-4">
                            <a class="btn btn-success btn_adminpanel" href="{{ route('admin.categories') }}">Категорії</a>
                            <a class="btn btn-warning btn_adminpanel" href="{{ route('admin.brands') }}">Бренди</a>
                        </div>
                        <div class="col-sm-4">
                            <a class="btn btn-success btn_adminpanel" href="#">Пошта</a>
                            <a class="btn btn-warning btn_adminpanel" href="#">Peклама</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>