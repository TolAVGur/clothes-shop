@section('title')
Адмін панель
@endsection

<div class="container">
    <div class="row">
        <div class="col-md-12">
            @if($message = Session::get('success'))
            <div class="alert alert-success d-flex align-items-center" role="alert">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:">
                    <use xlink:href="#check-circle-fill" />
                </svg>
                <div>{{ $message }}</div>
            </div>
            @endif

            <div class="row">
                <div class="col-md-12">
                    <caption> Управління категоріями | <a href="{{ route('admin.addcategory') }}"> Додати Категорію</a></caption><br><br>
                    <table class="table-striped" width="100%">
                        <thead>
                            <tr>
                                <th>Назва</th>
                                <th>Коротке визначення</th>
                                <th>Дата оновлення</th>
                                <th>Управління</th>
                            </tr>
                        </thead>
                        @foreach ($categories as $category)
                        <tr>
                            <td>{{ $category->name }}</td>
                            <td>{{ $category->slug }}</td>
                            <td>{{ $category->updated_at }}</td>
                            <td>
                                <a href="">Редагувати</a> |
                                <a href="">Видалити</a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    <hr>
                </div>
            </div>

        </div>

        <div class="col-md-12">
            <caption>Управління Брендами | <a href=""> Додати Бренд</a></caption><br><br>
            <div class="row">
                <div class="col-md-12">
                    <table class="table-striped" width="100%">
                        <thead>
                            <tr>
                                <th>Назва</th>
                                <th>Країна виробник</th>
                                <th>Дата оновлення</th>
                                <th>Управління</th>
                            </tr>
                        </thead>
                        @foreach ($brands as $brand)
                        <tr>
                            <td>{{ $brand->name }}</td>
                            <td>{{ $brand->country }}</td>
                            <td>{{ $brand->updated_at }}</td>
                            <td>
                                <a href="">Редагувати</a> |
                                <a href="">Видалити</a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    <hr>
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <caption>Керування користувачами | <a href=""> Додати Користувача</a></caption><br><br>
            <div class="row">
                <div class="col-md-12">
                    <table class="table-striped" width="100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Ім'я </th>
                                <th>email</th>
                                <th>Дата реєстрації</th>
                                <th>Права доступу</th>
                                <th>Дата оновлення</th>
                                <th>Управління</th>
                            </tr>
                        </thead>
                        @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->created_at }}</td>
                            <td>{{ $user->role_name }}</td>
                            <td>{{ $user->updated_at }}</td>
                            <td>
                                <a href="">Редагувати</a> |
                                <a href="">Видалити</a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    <hr>
                </div>
            </div>
        </div>
    </div>
</div>