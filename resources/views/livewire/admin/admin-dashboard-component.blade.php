@section('title')
Управление контентом
@endsection

<div style="text-align: center;">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <h5>Управление пользователями</h5>
                <ol style="text-align: left; background:thistle">
                    @foreach ($users as $user)
                    <li>
                        <label>{{ $user->name }}</label>
                        <label>{{ $user->email }}</label>
                        <label>{{ $user->role_name }}</label>
                    </li>
                    @endforeach
                </ol>
            </div>
            <div class="col-sm-4">
                <h5>Управление Категориями</h5>
                <ol style="text-align: left; background:thistle">
                    @foreach ($categories as $category)
                    <li>
                        <label>{{ $category->name }}</label>
                        <label>{{ $category->slug }}</label>
                    </li>
                    @endforeach
                </ol>
            </div>
            <div class="col-sm-4">
                <h5>Управление Брендами</h5>
                <ol style="text-align: left; background:thistle">
                    @foreach ($brands as $brand)
                    <li>
                        <label>{{ $brand->name }}</label>
                        <label>{{ $brand->country }}</label>
                    </li>
                    @endforeach
                </ol>
            </div>
        </div>
    </div>

</div>