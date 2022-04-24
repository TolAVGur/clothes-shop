@section('title')
Категорії
@endsection

<div class="container" style="padding-bottom: 50px;">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-md-6">Категорії</div>
                        <div class="col-md-6">
                            <a href="{{ route('admin.addcategory')}}" class="btn btn-warning pull-right">
                                Додати Категорію
                            </a>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <table class="table-striped" width="100%">
                        <thead>
                            <tr>
                                <th width="5%">Id</th>
                                <th>Назва</th>
                                <th>Коротке визначення</th>
                                <th>Управління</th>
                                <th>Дата оновлення</th>
                            </tr>
                        </thead>
                        @foreach ($categories as $category)
                        <tr>
                            <td>{{ $category->id}}</td>
                            <td>{{ $category->name }}</td>
                            <td>{{ $category->slug }}</td>
                            <td>
                                <a href="{{ route('admin.editcategory', ['category_slug' => $category->slug]) }}">
                                    <i class="fa fa-edit fa-2x"></i>
                                </a> |
                                <a href="">Видалити</a>
                            </td>
                            <td>{{ $category->updated_at }}</td>
                        </tr>
                        @endforeach
                    </table>
                    <hr>
                    <div style="margin-top: 30px; text-align: center;">
                        {{ $categories->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>