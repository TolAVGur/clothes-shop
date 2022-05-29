@section('title')
Редагування Бренду
@endsection

<div class="container" style="padding-bottom: 50px; width: 50%;">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-md-6">
                            <h5 style="color: #8a6d3b">Зміна інформації про бренд</h5>
                        </div>
                        <div class="col-md-6">
                            <a href="{{ route('admin.brands')}}" class="btn btn-warning btn_adminpanel pull-right">
                                До списку Брендів
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

                    <form class="form-horizontal" wire:submit.prevent="update_brand">
                        <div class="form-group">
                            <label class="col-md-4 control-label">Назва: </label>
                            <div class="col-md-4">
                                <input type="text" class="form-control input-md" wire:model="name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Країна: </label>
                            <div class="col-md-4">
                                <input type="text" class="form-control input-md" wire:model="country">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label"></label>
                            <div class="col-md-4">
                                <button type="submit" style="width: 100%;" class="btn btn-success pull-right">Оновити Бренд</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>