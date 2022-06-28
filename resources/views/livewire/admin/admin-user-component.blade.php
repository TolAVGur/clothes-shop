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
                                <th width="20%">Ім'я/Nic</th>
                                <th width="20%">E-mail</th>
                                <th width="20%">Роль</th>
                            </tr>
                        </thead>
                        @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->id}}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                <em> {{ $user->role_name }} </em>
                                <a href="{{ route('admin.roleedit', ['user_id' => $user->id]) }}"> - Змінити роль</a>
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