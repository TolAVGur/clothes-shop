@section('title')
Добавление Категории
@endsection


<div class="container">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <center>
        <div class="row">
            <p>Добавление категории</p>
            {{--action="" method="POST"--}}
            <form class="total_area" style="width: 50%; margin-bottom: 60px;">
                @csrf
                <ul>
                    {{--wire:model="name" wire:model="slug"--}}
                    <li><input type="text" name="name" class="form-control" placeholder="Введите название новой Категории..." required></li>
                    <li><input type="text" name="slug" class="form-control" placeholder="...и краткое определение..." required></li>
                    <li>
                        <div class="row">
                            <div class="col-md-9" style="text-align: left;">
                                <a class="btn btn-default" href="">Вернуться</a>
                                <a class="btn btn-default" href="">Очистить</a>
                            </div>
                            <div class="col-md-3"  style="text-align:right;">
                                <a type="submit" href="" class="btn btn-default">Добавить</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </form>
        </div>
        <hr>
    </center>
</div>