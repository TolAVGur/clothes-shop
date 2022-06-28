@section('title')
Роль користувача
@endsection

<div class="container" style="padding-bottom: 250px; width: 50%;">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-md-6">
                            <h4 style="color: #8a6d3b">Призначення нової ролі</h4>
                        </div>
                        <div class="col-md-6">
                            <a href="{{ route('admin.dashboard')}}" class="btn btn-warning btn_adminpanel pull-right">
                                Адмін-панель
                            </a>
                            <a href="{{ route('admin.users')}}" class="btn btn-warning btn_adminpanel pull-right">
                                Користувачи
                            </a>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <form wire:submit="update_user_role">
                        <table class="table-striped" width="100%">
                            <thead>
                                <tr>
                                    <th width="10%">Id</th>
                                    <th>Ім'я/Nic</th>
                                    <th>Поточна роль</th>
                                    <th>Нова роль</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tr>
                                <td>{{ $user_id }}</td>
                                <td>{{ $user_name }}</td>
                                <th>{{ $role_name }}</th>
                                <td>
                                    <select wire:model="role_id">
                                        @foreach($roles as $role)
                                       
                                        <option value="{{ $role->id }}">
                                            {{ $role->name }}
                                        </option>
                                      
                                        @endforeach
                                    </select>
                                </td>
                                <td>
                                    <button type="submit" class="btn btn-success pull-right">Оновити</button>
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>