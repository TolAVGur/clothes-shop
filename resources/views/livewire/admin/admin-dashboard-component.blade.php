@section('title')
Управление контентом
@endsection

<div style="text-align: center;">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div>
                    <h5>Управление пользователями</h5>
                    <ul style="text-align: left;">
                        @for($i = 1; $i <= 5; $i++) 
                            <li>
                                <label>{{ $i }} пользователь</label>
                            </li>
                        @endfor
                    </ul>
                    <hr>
                </div>
            </div>
        </div>
    </div>

</div>