@extends('layouts.app')

@section('title', 'Все изображения примера')

@section('banner')
    <!-- Breadcrumb Section Start -->
    <div class="section breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="cr-breadcrumb-area">
                        <h1 class="title">Галерея - {{ $work->title }}</h1>
                        <ul class="breadcrumb-list">
                            <li>
                                <span><input type="button" value="Назад" onClick="history.back()" class="btn-back"></span>
                            </li>
                            <li><span>Галерея - {{ $work->title }}</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->
@endsection

@section('image')
    <!-- About Section Start -->
    <div class="section-fluid section-padding gallery">
        <div class="container">
            <div class="container-fluid mb-3">
                <h4 class="title">{{ $work->description }}</h4>
                <p><span class="font-weight-bold">Дата выполнения: {{ $work->created_at }}</span></p>
                <div class="row g-2">
                    @foreach ($images as $image)
                        <div class="col-md-4">
                            <div class="card images">
                                <div class="img-container">
                                    <a href="/storage/image/works/{{ $image['name'] }}" class="colorbox" id="colorbox">
                                    <img src="/storage/image/works/{{ $image['name'] }}" class="card-img-top" alt="" height="250">
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- About Section End -->


@endsection
