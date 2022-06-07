@section('title')
Ролі
@endsection

<div class="container" style="padding-bottom: 50px; width: 50%;">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-md-6">
                            <h4 style="color: #8a6d3b">Список ролей</h4>
                        </div>
                        <div class="col-md-6">
                            <a href="{{ route('admin.addrole') }}" class="btn btn-success btn_adminpanel pull-right">
                                Створити роль
                            </a>
                            <a href="{{ route('admin.dashboard') }}" class="btn btn-warning btn_adminpanel pull-right">
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
                                <th>ID</th>
                                <th>Назва ролі</th>
                                <th>Дозволи</th>
                                <th></th>
                            </tr>
                        </thead>
                        @foreach ($roles as $role)
                        <tr>
                            <td>{{ $role->id }}</td>
                            <td>{{ $role->name }}</td>
                            <td>
                                -- --
                            </td>
                            <td align="right">
                                <a href="#">
                                    <i class="fa fa-edit fa-2x"></i>
                                </a> |
                                <a href="#">
                                    <i class="fa fa-times fa-2x text-danger"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    <div class="wrap-pagination-info">
                        {{ $roles->render('pagination::bootstrap-4') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>