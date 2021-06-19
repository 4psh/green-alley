@extends('layouts.app')

@section('title', 'Категории услуг «Зеленая аллея»')

@section('banner')
    <!-- Breadcrumb Section Start -->
    <div class="section breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="cr-breadcrumb-area">
                        <h1 class="title">Услуги</h1>
                        <ul class="breadcrumb-list">
                            <li>
                                <input type="button" value="Назад" onClick="history.back()" class="btn-back">
                            </li>
                            <li><span>Услуги</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->
@endsection

@section('categories')
    <!-- About Section Start -->
    <div class="section-fluid section-padding">
        <div class="container">
            <!-- Section Title Start -->
            <div class="section-title" data-aos="fade-up" data-aos-delay="200">
                <h2 class="title">Наши ландшафтные услуги</h2>
                <span></span>
                <p class="sub-title">Если вы решили сделать ландшафтный дизайн частного дома, дачи или сада, предлагаем
                    воспользоваться услугами нашей компании</p>
            </div>
            <!-- Section Title End -->
            <!-- About Timeline Start -->
            <div class="border-bottom tab-carousel">
                <div class="row row-cols-1">
                    <div class="col">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="tab-project-all">
                                <div class="project-carousel">
                                    <div class="swiper-container">
                                        <div class="swiper-wrapper">
                                            @foreach($categories as $category)
                                                <div class="swiper-slide">
                                                    <div class="single-project single-project-fullwidth"
                                                         data-aos="fade-up"
                                                         data-aos-delay="200">

                                                        <figure class="snip1174 navy col-md-4" data-aos="fade-up"
                                                                data-aos-delay="300">
                                                            <img src="/storage/image/categories/{{ $category->image }}"
                                                                 alt="sq-sample33" width="350" height="250"/>
                                                            <figcaption>
                                                                <h2>{{ $category->title }}</h2>
                                                                <p>
                                                                    {{ $category->brief }}
                                                                </p>
                                                                <a href="{{ route('services', $category['id']) }}"
                                                                   class="btn btn-warning">Подробнее</a>
                                                            </figcaption>
                                                        </figure>

                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="swiper-pagination d-none"></div>
                                    <div class="swiper-button-prev"><i class="fa fa-angle-left"></i></div>
                                    <div class="swiper-button-next"><i class="fa fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Section End -->
@endsection
