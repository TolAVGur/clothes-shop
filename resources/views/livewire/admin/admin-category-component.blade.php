@section('title')
Категорії
@endsection

<div class="container" style="padding-bottom: 50px;">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-md-6">
                            <h4 style="color: #8a6d3b">Категорії</h4>
                        </div>
                        <div class="col-md-6">
                            <a href="{{ route('admin.addcategory')}}" class="btn btn-success btn_adminpanel pull-right">
                                Додати Категорію
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
                                <th width="5%">Id</th>
                                <th>Назва</th>
                                <th>Код категорії</th>
                                <th>Дата оновлення</th>
                                <th></th>
                            </tr>
                        </thead>
                        @foreach ($categories as $category)
                        <tr>
                            <td>{{ $category->id}}</td>
                            <td>{{ $category->name }}</td>
                            <td>{{ $category->slug }}</td>
                            <td>{{ $category->updated_at }}</td>
                            <td align="right">
                                <a href="{{ route('admin.editcategory', ['category_slug' => $category->slug]) }}">
                                    <i class="fa fa-edit fa-2x"></i>
                                </a> |
                                <a href="#" wire:click.prevent="delete_category({{$category->id}})">
                                    <i class="fa fa-times fa-2x text-danger"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    <div class="wrap-pagination-info">
                        {{ $categories->render('pagination::bootstrap-4') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>