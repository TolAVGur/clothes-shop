@section('title')
Додавання Категорії
@endsection

<div class="container" style="padding: 50px; width: 50%;">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-md-6">
                            <h4>Додавання Категорії</h4>
                        </div>
                        <div class="col-md-6">
                            <a href="{{ route('admin.categories')}}" class="btn btn-warning pull-right">
                                    До списку категорій
                            </a>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal">
                        <div class="form-group">
                            <label class="col-md-4 control-label">Назва: </label>
                            <div class="col-md-4">
                                <input type="text" placeholder="Введіть назву..." class="form-control input-md">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Опис: </label>
                            <div class="col-md-4">
                                <input type="text" placeholder="Введіть опис..." class="form-control input-md">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label"></label>
                            <div class="col-md-4">
                                <button type="submit" style="width: 100%;" class="btn btn-warning pull-right">Додати</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>