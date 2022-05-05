@section('title')
Редагування Категорії
@endsection

<div class="container" style="padding: 50px; width: 50%;">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-md-6">
                            <h4>Категорія</h4>
                        </div>
                        <div class="col-md-6">
                            <a href="{{ route('admin.categories')}}" class="btn btn-warning pull-right">
                                До списку
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

                    <form class="form-horizontal" wire:submit.prevent="update_category">
                        <div class="form-group">
                            <label class="col-md-4 control-label">Назва: </label>
                            <div class="col-md-4">
                                <input type="text" placeholder="Введіть назву..." class="form-control input-md" wire:model="name" wire:keyup="generate_slug">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Код Категорії: </label>
                            <div class="col-md-4">
                                <label class="col-md-4 control-label"></label>
                                <input type="text" placeholder="" class="form-control input-md" readonly 
                                    wire:model="slug">
                                    <p style="color:royalblue; text-align: center;">Генерується автоматично</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label"></label>
                            <div class="col-md-4">
                                <button type="submit" style="width: 100%;" class="btn btn-warning pull-right">Оновити</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>