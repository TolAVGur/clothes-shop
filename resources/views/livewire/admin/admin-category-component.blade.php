@section('title')
Категорії
@endsection

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panal-heading">Категорії</div>
                <div class="panel-body">
                    <table class="table-striped" width="100%">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Назва</th>
                                <th>Коротке визначення</th>
                                <th>Дата оновлення</th>
                                <th>Управління</th>
                            </tr>
                        </thead>
                        @foreach ($categories as $category)
                        <tr>
                            <td>{{ $category->id}}</td>
                            <td>{{ $category->name }}</td>
                            <td>{{ $category->slug }}</td>
                            <td>{{ $category->updated_at }}</td>
                            <td>
                                <a href="">Редагувати</a> |
                                <a href="">Видалити</a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>