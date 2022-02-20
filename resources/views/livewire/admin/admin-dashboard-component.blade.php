@section('title')
Управление контентом
@endsection

<div>
    <div class="container">

        <div class="row">

            <div class="col-md-12">
                <caption>Категории | <a href="{{ route('admin.addcategory') }}" >Добавить категорию</a></caption>
                <div class="row">
                    <div class="col-sm-12">
                        <table cellpadding="5" border="1" width="100%">
                            <tr>
                                <th>Название</th>
                                <th>краткое определение</th>
                                <th>Управление</th>
                            </tr>
                            @foreach ($categories as $category)
                            <tr>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->slug }}</td>
                                <td>
                                    <a href="" class="btn btn-primary">Редактировать</a>
                                    <a href="" class="btn btn-primary">Удалить</a>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>


            <div class="col-sm-4">
                <caption>Пользователи</caption>
                <div class="row">
                    <div class="col-sm-12">
                        <table cellpadding="5" bordercolor="red" border="2" width="100%">
                            <tr>
                                <th>Имя </th>
                                <th>email</th>
                                <th>права доступа</th>
                            </tr>
                            @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->role_name }}</td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <caption>Бренды</caption>
                <div class="row">
                    <div class="col-sm-12">
                        <table cellpadding="5" border="1" width="100%">
                            <tr>
                                <th>Название</th>
                                <th>Страна производитель</th>
                            </tr>
                            @foreach ($brands as $brand)
                            <tr>
                                <td>{{ $brand->name }}</td>
                                <td>{{ $brand->country }}</td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <hr>
    </div>

</div>