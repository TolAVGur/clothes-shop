@section('title')
Управление контентом
@endsection

<div>
    <div class="container">

        <div class="row">
            <div class="col-sm-4">
                <caption>Пользователи</caption>
                <div class="row">
                    <div class="col-sm-11">
                        <table cellpadding="5" border="1" width="100%">
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
                <caption>Категории</caption>
                <div class="row">
                    <div class="col-sm-11">
                        <table cellpadding="5" border="1" width="100%">
                            <tr>
                                <th>Название</th>
                                <th>определение</th>
                            </tr>
                            @foreach ($categories as $category)
                            <tr>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->slug }}</td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <caption>Бренды</caption>
                <div class="row">
                    <div class="col-sm-11">
                        <table cellpadding="5" border="1" width="100%">
                            <tr>
                                <th>Название</th>
                                <th>Страна</th>
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