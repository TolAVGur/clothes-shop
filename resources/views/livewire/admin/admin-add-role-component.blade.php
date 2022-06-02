@section('title')
Створення Ролі
@endsection

<div class="container" style="padding-bottom: 50px; width: 50%;">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-md-6">
                            <h4 style="color: #8a6d3b">Створення Ролі</h4>
                        </div>
                        <div class="col-md-6">
                            <a href="{{ route('admin.roles') }}" class="btn btn-warning btn_adminpanel pull-right">
                                До списку Ролей
                            </a>
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

                    <form class="form-horizontal" >
                        <div class="form-group">
                            <label class="col-md-4 control-label">Назва: </label>
                            <div class="col-md-4">
                                <input type="text" placeholder="Введіть назву ролі" class="form-control input-md" wire:model="name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Дозволи: </label>
                            <div class="col-md-4">
                               
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label"></label>
                            <div class="col-md-4">
                                <button type="submit" style="width: 100%;" class="btn btn-success pull-right">Створити роль</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>