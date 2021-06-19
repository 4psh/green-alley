@extends('layouts.app')

@section('title', 'Главная «Зеленая аллея»')

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

            <!-- About Image/Content Start -->
            <div class="about-image-content-area container">
                <div class="row mb-n6">
                    <div class="col-lg-6 align-self-center order-lg-1 order-2 mb-6" data-aos="fade-up"
                         data-aos-delay="300">
                        <!-- About Content Start -->
                        <div class="about-content-area">
                            <h2 class="title">{{ $about->title }}</h2>
                            <p class="mb-5 mt-4">{{ $about->brief }}</p>
                            <a href="{{ route('about') }}" class="btn btn-hover-secondary btn-primary">Подробнее</a>
                        </div>
                        <!-- About Content End -->
                    </div>
                    <div class="col-lg-6 order-lg-2 order-1 mb-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="about-image">
                            <img src="/storage/image/about/{{ $about->image }}" alt="About Image">
                        </div>
                    </div>
                </div>
            </div>
            <!-- About Image/Content End -->
        </div>
    </div>
@endsection

@section('categories')
    <!-- About Section Start -->
    <div class="section-fluid section-padding pt-0">
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

@section('works')

    <div class="section-fluid section-padding bg-secondary tab-carousel">
        <div class="container-fluid">
            <div class="row">
                <!-- Section Title Start -->
                <div class="col-12 section-title mb-0" data-aos="fade-up"
                     data-aos-delay="300">
                    <h2 class="title text-white">Наши работы</h2>
                    <span></span>
                    <p class="sub-title text-white">Наша задача быть всегда лучшими в
                        ландшафтном дизайне и
                        благоустройстве частных участков.</p>
                </div>
                <!-- Section Title End -->
            </div>
            <div class="row row-cols-1 mt-5">
                <div class="col">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="tab-project-all">
                            <div class="project-carousel">
                                <div class="swiper-container">
                                    <div class="swiper-wrapper">
                                        <!-- Project Start -->
                                        @foreach($works as $work)
                                            <div class="swiper-slide">
                                                <div class="single-project single-project-fullwidth"
                                                     data-aos="fade-up"
                                                     data-aos-delay="200">
                                                    <div class="project-image">
                                                        <a href="/storage/image/works/{{ $work->image }}" class="colorbox" id="colorbox">
                                                        <img src="/storage/image/works/{{ $work->image }}"
                                                             alt="Project Image" style="height: 200px;">
                                                        </a>
                                                    </div>
                                                    <div class="project-content">
                                                        <h4 class="title"><a
                                                                href="{{ route('all-images', $work['id']) }}">{{ $work->title }}</a>
                                                        </h4>
                                                        <ul class="project-tag">
                                                            <li>
                                                                <a href="{{ route('style', $work->id) }}">Стиль {{ $work->style['name'] }}</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                    @endforeach
                                    <!-- Project End -->
                                    </div>
                                </div>
                                <div class="swiper-pagination d-none"></div>
                                <div class="swiper-button-prev"><i
                                        class="fa fa-angle-left"></i></div>
                                <div class="swiper-button-next"><i
                                        class="fa fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 mb-4 text-center mt-7" data-aos="fade-up" data-aos-delay="400">
                <a class="btn btn-primary btn-sm"
                   href="{{ route('works') }}">Посмотреть все работы</a>
            </div>
        </div>
    </div>
    <!-- Project Tab Section End -->

@endsection

@section('employees')

    <div class="section-fluid section-padding employee">
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

@section('bid')
    <div class="section-fluid bid" id="go-bid">
        <div class="wrapper" data-aos="fade-up" data-aos-delay="300">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-md-11">
                    <div class="contact-us text-center">
                        <div class="row">
                            <div class="col-md-6 contacts">
                                <div class="text-center all-contacts">
                                    @foreach($contacts as $contact)
                                        <div class="d-flex flex-row align-items-center"><span class="icons">
                                                <i class="fa fa-map-marker"></i>
                                            </span>
                                            <div class="address text-left">
                                                <span><u>Адрес</u></span>
                                                <p>{{ $contact->address }}</p>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-row align-items-center mt-3">
                                            <span class="icons"><i class="fa fa-phone"></i></span>
                                            <div class="address text-left"><span><u>Номер телефона</u></span>
                                                <p>{{ $contact->number }}</p>
                                            </div>
                                        </div>
                                        <div
                                            class="d-flex flex-row align-items-center mt-3">
                                            <span class="icons"><i class="fa fa-envelope-o"></i></span>
                                            <div class="address text-left">
                                                <span><u>Email</u></span>
                                                <p>{{ $contact->email }}</p>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-md-6" id="bid">
                                <div class="text-center px-1">
                                    <div class="forms p-4 py-5 bg-white">
                                        @if(session('success'))
                                            <div class="alert alert-success" role="alert"><h4><i
                                                        class="icon fa fa-check"></i>{{ session('success') }}</h4>
                                            </div>
                                        @endif
                                        <form method="post"
                                              action="{{  route('bid.store') }}">
                                            @csrf
                                            <h5>Оставить заявку</h5>
                                            <div class="mt-4 inputs">
                                                <input type="text" class="form-control" placeholder="Имя"
                                                       name="name">
                                                <input type="email" class="form-control" placeholder="Email"
                                                       name="email">
                                                <input type="tel" class="form-control" placeholder="Номер телефона"
                                                       name="number">
                                                <select name="id_service" class="form-control" required>
                                                    @foreach ($services as $service)
                                                        <option
                                                            value="{{ $service['id'] }}">{{ $service['title'] }}</option>
                                                    @endforeach
                                                </select>
                                                <textarea class="form-control" placeholder="Опишите детали заявки"
                                                          name="description"></textarea>
                                            </div>
                                            <div class="button mt-4 text-left">
                                                <button type="submit" class="btn btn-warning">Отправить
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
