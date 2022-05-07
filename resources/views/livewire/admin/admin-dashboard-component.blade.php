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

                <div class="panel-body" style="margin-bottom: 250px;">

                    <table class="table-striped">
                        <thead>
                            <tr>
                                <th><a class="btn btn-warning" href="{{ route('admin.categories') }}">Управління Категоріями</a></th>
                                <th><a class="btn btn-warning" href="{{ route('admin.brands') }}">Управління Брендами</a></th>
                                <th><a class="btn btn-warning" href="{{ route('admin.products') }}">Управління Товарами</a></th>
                                <th><a class="btn btn-warning" href="#">Управління Користувачами</a></th>
                            </tr>
                        </thead>

                        <tbody>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>