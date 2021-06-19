@extends('layouts.app')

@section('title', 'Услуги «Зеленая аллея»')

@section('banner')
    <!-- Breadcrumb Section Start -->
    <div class="section breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="cr-breadcrumb-area">
                        <h1 class="title">Услуги - {{ $category->title }}</h1>
                        <ul class="breadcrumb-list">
                            <li>
                                <input type="button" value="Назад" onClick="history.back()" class="btn-back">
                            </li>
                            <li><span>Услуги - {{ $category->title }}</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->
@endsection

@section('service')


    <!-- Project Section Start -->
    <div class="section section-padding pt-5">
        <div class="container">
            <div class="row mb-n9">
                <div class="col-md-5 col-lg-3 mb-8 col-sm-12">
                    <div class="project-info">
                        <h4 class="title mb-6">Виды услуг - {{ $category->title }}</h4>
                        <ul class="mb-n1">
                            @foreach($services as $service)
                                <li><a href="#{{ $service->title }}">{{ $service->title }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-md-7 col-lg-9 col-sm-12 mb-8">
                    @foreach($services as $service)
                        <div class="container services-list">
                            <div class="row project-desc">
                                <div class="col-8">
                                    <h4 class="title"><a id="{{ $service->title }}">{{ $service->title }}</a></h4>
                                    <p><span class="font-weight-bold">{{ $service->note }}</span></p>
                                </div>
                                <div class="col price">
                                    <h4 class="title-price">{{ $service->min_price }} <span class="units">руб/{{ $service->unit['name'] }}.</span></h4>
                                </div>
                            </div>
                        </div>
                        <hr class="hr-service">
                    @endforeach
                </div>
            </div>
        </div>
    </div>
        <!-- Project Masonry Section End -->

@endsection
