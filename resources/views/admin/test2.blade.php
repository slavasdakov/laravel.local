@extends('layouts.main')

@section('title')
    @parent Тест2
@endsection

@section ('menu')
    @include('admin.menu')
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <p>Тест 2</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
