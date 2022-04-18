@section('title')
Додавання Категорії
@endsection

<div class="container">
        <div class="row">
            <h4>Додавання Категорії</h4>
            <form action="{{ route('admin.addcategory') }}" method="POST"
                    class="total_area" style="width: 50%; margin-bottom: 100px;">
                @csrf
                <ul>
                    <li><input type="text" name="name" class="form-control" 
                        placeholder="Введіть назву нової Категорії..." required ></li>
                    <li><input type="text" name="slug" class="form-control" 
                        placeholder="...і коротке визначення..." required ></li>
                    <li>
                        <div class="row">
                            <div class="col-md-9" style="text-align: left;">
                                <a class="btn btn-warning btn-sm" href="{{ route('admin.dashboard') }}">Повернутись</a>
                                <a class="btn btn-warning btn-sm" href="">Очистити</a>
                            </div>
                            <div class="col-md-3" style="text-align:right;">
                                <a type="submit" class="btn btn-info btn-sm" 
                                    wire:click.prevent="store({{'name'}}, {{'slug'}})">Додати</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </form>
        </div>
        <hr>
</div>