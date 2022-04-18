@section('title')
Управление контентом
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
                <caption> Управление Категориями | <a class="btn btn-info btn-sm" href="{{ route('admin.addcategory') }}">Добавить Категорию</a></caption><br><br>
                    <table class="table-striped" width="100%">
                        <thead>
                            <tr>
                                <th>Название</th>
                                <th>Краткое определение</th>
                                <th>обновлено</th>
                                <th>Управление</th>
                            </tr>
                        </thead>
                        @foreach ($categories as $category)
                        <tr>
                            <td>{{ $category->name }}</td>
                            <td>{{ $category->slug }}</td>
                            <td>{{ $category->updated_at }}</td>
                            <td>
                                <a class="btn btn btn-warning btn-sm" href="">Редактировать</a>
                                <a class="btn btn-danger btn-sm" href="">Удалить</a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    <hr>
                </div>
            </div>

        </div>

        <div class="col-md-12">
            <caption>Управление Брендами | <a href="">Добавить Бренд</a></caption><br><br>
            <div class="row">
                <div class="col-md-12">
                    <table class="table-striped" width="100%">
                        <thead>
                            <tr>
                                <th>Название</th>
                                <th>Страна производитель</th>
                                <th>обновлено</th>
                                <th>Управление</th>
                            </tr>
                        </thead>
                        @foreach ($brands as $brand)
                        <tr>
                            <td>{{ $brand->name }}</td>
                            <td>{{ $brand->country }}</td>
                            <td>{{ $brand->updated_at }}</td>
                            <td>
                                <a href="">Редактировать</a> |
                                <a href="">Удалить</a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    <hr>
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <caption>Управление Пользователями | <a href="">Добавить Пользователя</a></caption><br><br>
            <div class="row">
                <div class="col-md-12">
                    <table class="table-striped" width="100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Имя </th>
                                <th>email</th>
                                <th>дата регистрации</th>
                                <th>права доступа</th>
                                <th>обновлено</th>
                                <th>Управление</th>
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
                                <a href="">Редактировать</a> |
                                <a href="">Удалить</a>
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