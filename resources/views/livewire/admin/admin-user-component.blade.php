@section('title')
Користувачи
@endsection

<div class="container" style="padding-bottom: 50px;">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-md-6">
                            <h4 style="color: #8a6d3b">Список користувачів</h4>
                        </div>
                        <div class="col-md-6">
                            <a href="{{ route('admin.dashboard')}}" class="btn btn-warning btn_adminpanel pull-right">
                                Адмін-панель
                            </a>
                        </div>
                    </div>
                </div>
                <div class="panel-body">

                    @if (Session::has('message'))
                    <div class="alert alert-warning" role="alert">
                        {{ Session::get('message') }}
                    </div>
                    @endif

                    <table class="table-striped" width="100%">
                        <thead>
                            <tr>
                                <th width="5%">Id</th>
                                <th>Ім'я/Nic</th>
                                <th>E-mail</th>
                                <th>Телефон</th>
                                <th>Дата оновлення</th>
                                <th>Роль</th>
                            </tr>
                        </thead>
                        @foreach ($users as $u)
                        <tr>
                            <td>{{ $u->id}}</td>
                            <td>{{ $u->name }}</td>
                            <td>{{ $u->email }}</td>
                            <td>{{ $u->phone }}</td>
                            <td>{{ $u->updated_at }}</td>
                            <td>
                                <label style="width: 50px;">
                                    {{ $u->role_name }}
                                </label>
                                <a href="#">Змінити роль</a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    <div class="wrap-pagination-info">
                        {{ $users->render('pagination::bootstrap-4') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>