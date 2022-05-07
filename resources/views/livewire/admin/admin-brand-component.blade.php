@section('title')
Бренди
@endsection

<div class="container" style="padding-bottom: 50px;">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-md-6"><h4>Бренди</h4></div>
                        <div class="col-md-6">
                            <a href="{{ route('admin.addbrand')}}" class="btn btn-warning pull-right">
                                Додати Бренд
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
                                <th>Страна виробник</th>
                                <th>Дата оновлення</th>
                                <th></th>
                            </tr>
                        </thead>
                        @foreach ($brands as $brand)
                        <tr>
                            <td>{{ $brand->id}}</td>
                            <td>{{ $brand->name }}</td>
                            <td>{{ $brand->country }}</td>
                            <td>{{ $brand->updated_at }}</td>
                            <td align="right">
                            <a href="{{ route('admin.editbrand', ['brand_id' => $brand->id]) }}">
                                    <i class="fa fa-edit fa-2x"></i>
                                </a> |
                                <a href="#" wire:click.prevent="delete_brand({{$brand->id}})">
                                    <i class="fa fa-times fa-2x text-danger"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    <hr>
                    <div style="margin-top: 30px; text-align: center;">
                        {{$brands->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>