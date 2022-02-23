@section('title')
Управление контентом
@endsection

<div class="container">

    <div class="row">

        <div class="col-md-12">
            <caption>Управление Категориями | <a href="{{ route('admin.addcategory') }}">Добавить Категорию</a></caption>
            <br><br>

            <div class="row">
                <div class="col-md-12">
                    <table class="table-striped" width="100%">
                        <thead>
                            <tr>
                                <th>Название</th>
                                <th>Краткое определение</th>
                                <th>последние изминения</th>
                                <th>Управление</th>
                            </tr>
                        </thead>
                        @foreach ($categories as $category)
                        <tr>
                            <td>{{ $category->name }}</td>
                            <td>{{ $category->slug }}</td>
                            <td>{{ $category->updated_at }}</td>
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
            <caption>Управление Брендами | <a href="">Добавить Бренд</a></caption><br><br>
            <div class="row">
                <div class="col-md-12">
                    <table class="table-striped" width="100%">
                        <thead>
                            <tr>
                                <th>Название</th>
                                <th>Страна производитель</th>
                                <th>последние изминения</th>
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
                                <th>дата изменения профиля</th>
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