@extends('layouts.app')

@section('title', 'Стили «Зеленая аллея»')

@section('banner')
    <!-- Breadcrumb Section Start -->
    <div class="section breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="cr-breadcrumb-area">
                        <h1 class="title">Стили</h1>
                        <ul class="breadcrumb-list">
                            <li>
                                <input type="button" value="Назад" onClick="history.back()" class="btn-back">
                            </li>
                            <li><span>Стили</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->
@endsection

@section('style')


    <!-- Project Section Start -->
    <div class="section section-padding pt-5">
        <div class="container">
            <div class="row mb-n9">
                <div class="col-md-5 col-lg-3 mb-8 col-sm-12">
                    <div class="project-info">
                        <h4 class="title mb-6">Стили</h4>
                        <ul class="mb-n1">
                            @foreach($styles as $style)
                                <li><a href="#{{ $style->name }}">{{ $style->name }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-md-7 col-lg-9 col-sm-12 mb-8">
                    @foreach($styles as $style)
                        <div class="project-desc service-list" id="{{ $style->name }}">
                            <h4 class="title mb-6"><a>{{ $style->name }}</a></h4>
                            <p>{{ $style->description }}</p>
                            <p><span class="font-weight-bold">Галерея работ, выполненных в данном стиле:</span></p>
                            <div class="border-bottom tab-carousel mb-5">
                                <div class="row row-cols-1">
                                    <div class="col">
                                        <div class="tab-content">
                                            <div class="tab-pane fade show active" id="tab-project-all">
                                                <div class="project-carousel">
                                                    <div class="swiper-container">
                                                        <div class="swiper-wrapper">
                                                            @foreach($img as $i)
                                                                @if($i->style_id == $style->id)
                                                                <div class="swiper-slide">
                                                                    <div class="single-project single-project-fullwidth"
                                                                         data-aos="fade-up"
                                                                         data-aos-delay="200">

                                                                        <a href="/storage/image/styles/{{ $i->name }}" class="colorbox" id="colorbox">

                                                                        <figure class="snip1174 navy col-md-4"
                                                                                data-aos="fade-up"
                                                                                data-aos-delay="300">
                                                                            <img
                                                                                src="/storage/image/styles/{{ $i->name }}"
                                                                                alt="sq-sample33" width="300"
                                                                                height="150"/>
                                                                        </figure>

                                                                    </div>
                                                                </div>
                                                                @endif
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                    <div class="swiper-pagination d-none"></div>
                                                    <div class="swiper-button-prev"><i class="fa fa-angle-left"></i>
                                                    </div>
                                                    <div class="swiper-button-next"><i class="fa fa-angle-right"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- Project Masonry Section End -->

@endsection
