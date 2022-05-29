@section('title')
Додавання Товару
@endsection

<div class="container" style="padding: 50px; width: 60%;">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-md-6">
                            <h4 style="color: #8a6d3b">Додавання нового товару</h4>
                        </div>
                        <div class="col-md-6">
                            <a href="{{ route('admin.products')}}" class="btn btn-warning pull-right">
                                До списку товарів
                            </a>
                            <a href="{{ route('admin.dashboard')}}" class="btn btn-warning pull-right">
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

                    <form class="form-horizontal" wire:submit.prevent="store_product">
                        <!-- slug -->
                        <div class="form-group">
                            <label class="col-md-4 control-label"></label>
                            <div class="col-md-6">
                                <input type="hidden" class="form-control" wire:model="slug">
                            </div>
                        </div>

                        <!-- categories -->
                        <div class="form-group">
                            <label class="col-md-4 control-label">* Категорія: </label>
                            <div class="col-md-6">
                                <!-- ????? -->
                                <select wire:model="category_id">
                                    @foreach ( $categories as $category)
                                    <option value="{{ $category->id }}">
                                        {{ $category->name }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <!-- brands -->
                        <div class="form-group">
                            <label class="col-md-4 control-label">* Бренд: </label>
                            <div class="col-md-6">
                                <select wire:model="brand_id">
                                    @foreach ($brands as $brand)
                                    <option value="{{ $brand->id }}">
                                        {{ $brand->name }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <!-- name -->
                        <div class="form-group">
                            <label class="col-md-4 control-label">* Назва: </label>
                            <div class="col-md-6">
                                <input type="text" placeholder="Введіть назву..." class="form-control input-md" wire:model="name" wire:keyup="generate_slug" required>
                            </div>
                        </div>

                        <!-- sku -->
                        <div class="form-group">
                            <label class="col-md-4 control-label">Код товару: </label>
                            <div class="col-md-6">
                                <input type="text" placeholder="{{$this->slug}}" class="form-control input-md" wire:model="sku" readonly>
                                <span>заповнюеться автоматично</span>
                            </div>
                        </div>

                        <!-- short_description -->
                        <div class="form-group">
                            <label class="col-md-4 control-label">Коротке визначення: </label>
                            <div class="col-md-6">
                                <input type="text" placeholder="Введіть короткий опис..." class="form-control input-md" wire:model="short_description">
                            </div>
                        </div>

                        <!-- description -->
                        <div class="form-group">
                            <label class="col-md-4 control-label">* Опис товару: </label>
                            <div class="col-md-6">
                                <textarea class="form-control input-md" rows="3" cols="20" wrap="hard" placeholder="Введіть опис товару..." wire:model="description" required></textarea>
                            </div>
                        </div>

                        <!-- sizes -->
                        <div class="form-group">
                            <label class="col-md-4 control-label">Розмір: </label>
                            <div class="col-md-6">
                                <input type="text" placeholder="" class="form-control input-md" wire:model="sizes">
                            </div>
                        </div>

                        <!-- sale_price -->
                        <div class="form-group">
                            <label class="col-md-4 control-label">* Ціна продажу: </label>
                            <div class="col-md-6">
                                <input type="text" placeholder="Введіть цiну..." class="form-control input-md" wire:model="sale_price" required>
                            </div>
                        </div>

                        <!-- discount -->
                        <div class="form-group">
                            <label class="col-md-4 control-label">Знижка: </label>
                            <div class="col-md-6">
                                <input type="text" placeholder="" class="form-control input-md" wire:model="discount">
                            </div>
                        </div>

                        <!-- quantity -->
                        <div class="form-group">
                            <label class="col-md-4 control-label">* Кількість: </label>
                            <div class="col-md-6">
                                <input type="text" placeholder="Введіть код товару..." class="form-control input-md" wire:model="quantity" required>
                            </div>
                        </div>

                        <!-- image -->
                        <div class="form-group">
                            <label class="col-md-4 control-label">Зображення: </label>
                            <div class="col-md-6">
                                <input type="file" class="form-control" wire:model="image">
                            </div>
                        </div>
                        <hr>

                        <!-- submit -->
                        <div class="form-group">
                            <label class="col-md-4 control-label"></label>
                            <div class="col-md-4">
                                <button type="submit" style="width: 100%;" class="btn btn-warning pull-right">Додати</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>