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
                            <h4>Додавання нового товару</h4>
                        </div>
                        <div class="col-md-6">
                            <a href="{{ route('admin.products')}}" class="btn btn-warning pull-right">
                                До списку товарів
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

                    <form class="form-horizontal" wire:submit.prevent="store_product">
                        <div class="form-group">
                            <label class="col-md-4 control-label"></label>
                            <div class="col-md-6">
                                <input type="hidden" class="form-control" wire:model="slug">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">* Назва: </label>
                            <div class="col-md-6">
                                <input type="text" placeholder="Введіть назву..." class="form-control input-md" wire:model="name" wire:keyup="generate_slug" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Коротке визначення: </label>
                            <div class="col-md-6">
                                <input type="text" placeholder="Введіть короткий опис..." class="form-control input-md" wire:model="short_description">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">* Опис товару: </label>
                            <div class="col-md-6">
                                <textarea class="form-control input-md" rows="3" cols="20" wrap="hard" placeholder="Введіть опис товару..." wire:model="description" required></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Розмір: </label>
                            <div class="col-md-6">
                                <input type="text" placeholder="" class="form-control input-md" wire:model="sizes">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">* Ціна продажу: </label>
                            <div class="col-md-6">
                                <input type="text" placeholder="Введіть цiну..." class="form-control input-md" wire:model="sale_price" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Знижка: </label>
                            <div class="col-md-6">
                                <input type="text" placeholder="" class="form-control input-md" wire:model="discount">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">* Код товару: </label>
                            <div class="col-md-6">
                                <input type="text" placeholder="Введіть код товару..." class="form-control input-md" wire:model="sku" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">* Кількість: </label>
                            <div class="col-md-6">
                                <input type="text" placeholder="Введіть код товару..." class="form-control input-md" wire:model="quantity" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Зображення: </label>
                            <div class="col-md-6">
                                <input type="file" class="form-control" wire:model="image">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">* Категорія: </label>
                            <div class="col-md-6">
                                <select>
                                    @foreach ( $categories as $category)
                                    <option>
                                        {{ $category->name }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">* Бренд: </label>
                            <div class="col-md-6">
                                <select>
                                    @foreach ($brands as $brand)
                                    <option>
                                        {{ $brand->name }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <hr>
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