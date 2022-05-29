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
                            <h4 style="color: #8a6d3b">Список товарів</h4>
                        </div>
                        <div class="col-md-6">
                            <a href="{{ route('admin.addproduct')}}" class="btn btn-success btn_adminpanel pull-right">
                                Додати товар
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

                    <table class="table-striped" width="100%">
                        <thead>
                            <tr>
                                <th width="10%">Код</th>
                                <th width="5%">Фото</th>
                                <th>Категорія</th>
                                <th>Виробник</th>
                                <th>Назва</th>
                                <th>Розм</th>
                                <th width="5%">Кільк.</th>
                                <th width="5%">Зн.</th>
                                <th width="5%">Ціна</th>
                                <th>Час оновлення</th>
                                <th width="8%">Управління</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                            <tr>
                                <td>{{ $product->SKU }}</td>
                                <td>
                                    @if(!empty($product->image))
                                    <img src="{{ asset('storage/images/shop') }}/{{ $product->image}}" width="50px" alt="{{ $product->image }}">
                                    @else
                                    Файлу немає
                                    @endif
                                </td>
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
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->sizes }}</td>
                                <td>{{ $product->quantity }}</td>
                                <td>{{ $product->discount }}</td>
                                <td><b>{{ $product->sale_price }}</b></td>
                                <td>{{ $product->updated_at }}</td>
                                <td>
                                    <a href="{{ route('admin.editproduct', ['product_id' => $product->id]) }}">
                                        <i class="fa fa-edit fa-2x"></i>
                                    </a> |
                                    <a href="#" wire:click.prevent="delete_product({{$product->id}})">
                                        <i class="fa fa-times fa-2x text-danger"></i>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>

                    </table>
                    <div class="wrap-pagination-info">
                        {{ $products->render('pagination::bootstrap-4') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>