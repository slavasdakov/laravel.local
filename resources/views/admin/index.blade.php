@extends('layouts.main')

@section('title')
    @parent Админка
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
                        <p>Админка</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
