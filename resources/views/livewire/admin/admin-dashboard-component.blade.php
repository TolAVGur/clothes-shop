@section('title')
Адмін панель
@endsection

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default" align="center">
                <div class="panel-heading">
                    <h4>Панель управління</h4>
                </div>

                <div class="panel-body">
                    <table width="100%">
                        <thead>
                            <tr>
                                <th><a class="btn btn-warning" href="#">Управління Користувачами</a></th>
                                <th><a class="btn btn-warning" href="{{ route('admin.categories') }}">Управління Категоріями</a></th>
                                <th><a class="btn btn-warning" href="{{ route('admin.brands') }}">Управління Брендами</a></th>
                                <th><a class="btn btn-warning" href="{{ route('admin.products') }}">Управління Товарами</a></th>
                            </tr>
                        </thead>

                        <tbody>
                            <td valign="top">
                                <ol>
                                    @foreach ($users as $usr)
                                    <li>{{$usr->name}}</li>
                                    @endforeach
                                </ol>
                            </td>
                            <td valign="top">
                                <ol>
                                    @foreach ($categories as $category)
                                    <li>{{$category->name}}</li>
                                    @endforeach
                                </ol>
                            </td>
                            <td valign="top">
                                <ol>
                                    @foreach ($brands as $brand)
                                    <li>{{$brand->name}}</li>
                                    @endforeach
                                </ol>
                            </td>
                            <td valign="top">
                                <ol>
                                    @foreach ($products as $product)
                                    <li>{{$product->name}}</li>
                                    @endforeach
                                </ol>
                            </td>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>