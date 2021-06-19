@extends('layouts.app')

@section('title', 'О нас')

@section('banner')
    <!-- Breadcrumb Section Start -->
    <div class="section breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="cr-breadcrumb-area">
                        <h1 class="title">О нас</h1>
                        <ul class="breadcrumb-list">
                            <li>
                                <input type="button" value="Назад" onClick="history.back()" class="btn-back">
                            </li>
                            <li><span>О нас</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->
@endsection

@section('about')

    <!-- About Section Start -->
    <div class="section-fluid section-padding">
        <div class="container-fluid">
            <!-- Section Title Start -->
            <div class="section-title" data-aos="fade-up" data-aos-delay="200">
                <h2 class="title">О компании</h2>
                <span></span>
                <p class="sub-title">Если вы решили сделать ландшафтный дизайн частного дома, дачи или сада, предлагаем
                    воспользоваться услугами нашей компании</p>
            </div>
            <!-- Section Title End -->

        @foreach($abouts as $about)
            <!-- Blog Main Area Start -->
                <div class="col-lg-9 m-auto">
                    <!-- Single Post Details Start -->
                    <div class="blog-details mb-10">

                        <!-- Single Post Details Content Start -->
                        <div class="content" data-aos="fade-up" data-aos-delay="300">

                            <!-- Description Start -->
                            <div class="desc">
                                <div class="image mt-0" data-aos="fade-up" data-aos-delay="300">
                                    <img class="fit-image" src="/storage/image/about/{{ $about->image }}"
                                         alt="{{ $about->image }}">
                                </div>
                                <!-- Title Start -->
                                <h2 class="title mt-3">{{ $about->title }}</h2>
                                <!-- Title End -->
                                <p class="mb-0">{{ $about->description }}</p>
                            </div>
                            <!-- Description End -->

                        </div>
                        <!-- Single Post Details Content End -->
                    </div>
                    <!-- Single Post Details End -->
                </div>
            @endforeach
        </div>
    </div>
    </div>

@endsection

@section('employees')

    <div class="section-fluid section-padding employee pt-0">
        <div class="container">
            <div class="row">
                <!-- Section Title Start -->
                <div class="col-12 section-title" data-aos="fade-up" data-aos-delay="300">
                    <h2 class="title">Наши эксперты</h2>
                    <span></span>
                    <p class="sub-title">Специалисты нашей компании помогут создать приятную
                        и комфортную среду для
                        времяпрепровождения на свежем воздухе с семьей и друзьями, учитывая
                        все детали.</p>
                </div>
                <!-- Section Title End -->
            </div>
            <!-- Team Members Area Start -->
            <div class="row row-cols-1">
                <div class="col">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="tab-project-all">
                            <div class="project-carousel">
                                <div class="swiper-container">
                                    <div class="swiper-wrapper">
                                        @foreach($employees as $employee)
                                            <div class="swiper-slide">
                                                <div class="single-project single-project-fullwidth single-team-member"
                                                     data-aos="fade-up"
                                                     data-aos-delay="200">
                                                    <!-- Team Member Images Start -->
                                                    <div class="team-member-image">
                                                        <img src="/storage/image/employees/{{ $employee->image }}"
                                                             alt="{{ $employee->surname }} {{ $employee->name }}">
                                                    </div>
                                                    <!-- Team Member Images End -->

                                                    <!-- Team Member Name/Social Identity Start -->
                                                    <div class="team-member-content">
                                                        <h2 class="name">{{ $employee->surname }} {{ $employee->name }}</h2>
                                                        <span class="person-title">{{ $employee->post }}</span>
                                                    </div>
                                                    <!-- Team Member Name/Social Identity End -->
                                                </div>
                                                <!-- Single Team member End -->
                                            </div>
                                    @endforeach

                                    <!-- Team Members Area End -->
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
    <!-- Team Section End -->

@endsection
