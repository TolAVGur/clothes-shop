@section('title')
Управление контентом
@endsection

<div class="container">

    <div class="row">

        <div class="col-md-12">
                <caption>Управление Категориями | <a href="{{ route('admin.addcategory') }}">Добавить Категорию</a></caption>
                <br><br>
            <div class="row">
                <div class="col-md-9">
                    <table cellpadding="5" bordercolor="silver" border="1" width="100%">
                        <tr>
                            <th>Название</th>
                            <th>Краткое определение</th>
                            <th>Управление</th>
                        </tr>
                        @foreach ($categories as $category)
                        <tr>
                            <td>{{ $category->name }}</td>
                            <td>{{ $category->slug }}</td>
                            <td>
                                <a href="{{ route('admin.updatecategory') }}" class="btn  btn-default dropdown-toggle usa">Редактировать</a>
                                <a href="" class="btn  btn-default dropdown-toggle usa">Удалить</a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
            <hr>
        </div>

        <div class="col-md-12">
                <caption>Управление Брендами | <a href="{{ route('admin.addbrand') }}">Добавить Бренд</a></caption><br><br>
            <div class="row">
                <div class="col-md-9">
                    <table cellpadding="5" bordercolor="silver" border="1" width="100%">
                        <tr>
                            <th>Название</th>
                            <th>Страна производитель</th>
                            <th>Управление</th>
                        </tr>
                        @foreach ($brands as $brand)
                        <tr>
                            <td>{{ $brand->name }}</td>
                            <td>{{ $brand->country }}</td>
                            <td>
                                <a href="" class="btn  btn-default dropdown-toggle usa">Редактировать</a>
                                <a href="" class="btn  btn-default dropdown-toggle usa">Удалить</a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
            <hr>
        </div>


        <div class="col-md-12">
                <caption>Управление Пользователями | <a href="">Добавить Пользователя</a></caption><br><br>
            <div class="row">
                <div class="col-md-12">
                    <table cellpadding="5" bordercolor="silver" border="1" width="100%">
                        <tr>
                            <th>Имя </th>
                            <th>email</th>
                            <th>дата регистрации</th>
                            <th>права доступа</th>
                            <th>дата изменения профиля</th>
                            <th>Управление</th>
                        </tr>
                        @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->created_at }}</td>
                            <td>{{ $user->role_name }}</td>
                            <td>{{ $user->updated_at }}</td>
                            <td>
                                <a href="" class="btn  btn-default dropdown-toggle usa">Редактировать</a>
                                <a href="" class="btn  btn-default dropdown-toggle usa">Удалить</a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
            <hr>
        </div>
    </div>
</div>