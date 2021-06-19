@extends('layouts.app')

@section('title', 'Наши работы «Зеленая аллея»')

@section('banner')
    <!-- Breadcrumb Section Start -->
    <div class="section breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="cr-breadcrumb-area">
                        <h1 class="title">Наши работы</h1>
                        <ul class="breadcrumb-list">
                            <li>
                                <input type="button" value="Назад" onClick="history.back()" class="btn-back">
                            </li>
                            <li><span>Наши работы</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->
@endsection

@section('works')
    <!-- Project Masonry Section Start -->
    <div class="section section-padding">
        <div class="container">
            <div class="row row-cols-lg-3 row-cols-md-2 row-cols-sm-2 row-cols-1 mb-n8">

            @foreach($works as $work)
                <!-- Single project Start -->
                    <div class="col mb-8">
                        <div class="single-project single-project-fullwidth" data-aos="fade-up"
                             data-aos-delay="300">
                            <div class="project-image">
                                <a class="project-overlay img-works" href="{{ route('all-images', $work['id']) }}"  style="height: 200px;">
                                    <img src="/storage/image/works/{{ $work->image }}" alt="Project Image">
                                </a>
                            </div>
                            <div class="project-content project-content-dark">
                                <h4 class="title"><a
                                        href="{{ route('all-images', $work['id']) }}">{{ $work->title }}</a></h4>
                                <ul class="project-tag">
                                    @foreach($categories as $category)
                                        @if($category->id == $work->service['id_cat'])
                                            <li>
                                                <a href="{{ route('services', $category->id) }}">{{ $category->title }}</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('style', $work->id) }}">Стиль {{ $work->style['name'] }}</a>
                                            </li>
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Single Portfolio End -->
                @endforeach

            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mt-10">
                    <div class="load-more" data-aos="fade-up" data-aos-delay="500">
                        <div class="btn btn-hover-secondary btn-primary">
                            {{ $works->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Project Masonry Section End -->
@endsection
