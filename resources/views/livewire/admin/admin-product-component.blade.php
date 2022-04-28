@section('title')
Список товарів
@endsection

<div class="container" style="padding-bottom: 50px;">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-md-6">
                            <h4>Список товарів</h4>
                        </div>
                        <div class="col-md-6">
                            <a href="#" class="btn btn-warning pull-right">
                                Додати новий товар
                            </a>
                        </div>
                    </div>
                </div>
                <div class="panel-body">

                    @if (Session::has('message'))
                    <div class="alert alert-success" role="alert">
                        {{ Session::get('message') }}
                    </div>
                    @endif

                    <table class="table-striped" width="100%">
                        <thead>
                            <tr>
                                <th width="4%">Id</th>
                                <th width="6%">Код</th>
                                <th>Назва</th>
                                <th>Категорія</th>
                                <th>Виробник</th>
                                <th>Розмір</th>
                                <th>Ціна продажу</th>
                                <th>Знижка</th>
                                <th>Кількість</th>
                                <th>Дата оновлення</th>
                                <th>Управління</th>
                            </tr>
                        </thead>
                        @foreach ($products as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->SKU }}</td>
                            <td>{{ $product->name }}</td>
                            <td>
                                @foreach ($categories as $category)
                                @if ($product->category_id == $category->id )
                                {{ $category->name }}
                                @endif
                                @endforeach
                            </td>
                            <td>
                            @foreach ($brands as $brand)
                                @if ($product->brand_id == $brand->id )
                                {{ $brand->name }}
                                @endif
                                @endforeach
                            </td>
                            <td>{{ $product->sizes }}</td>
                            <td>{{ $product->sale_price }}</td>
                            <td>{{ $product->discount }}</td>
                            <td>{{ $product->quantity }}</td>
                            <td>{{ $product->updated_at }}</td>
                            <td>
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
                    <hr>
                    <div style="margin-top: 30px; text-align: center;">
                        {{ $products->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>