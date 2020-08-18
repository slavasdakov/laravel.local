@extends ("layouts.main")

@section('title')
    @parentНовости
@endsection

@section('menu')
    @include('menu')
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        @if (!$news['isPrivate'])
                            <h2><?=$news['title']?></h2>
                            <p><?=$news['text']?></p>
                        @else
                            Новость приватная. Зарегистрируйтесь для просмотра ..
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


