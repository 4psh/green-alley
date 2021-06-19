@extends('layouts.app')

@section('title', 'Контакты «Зеленая аллея»')

@section('banner')
    <!-- Breadcrumb Section Start -->
    <div class="section breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="cr-breadcrumb-area">
                        <h1 class="title">Контакты</h1>
                        <ul class="breadcrumb-list">
                            <li>
                                <input type="button" value="Назад" onClick="history.back()" class="btn-back">
                            </li>
                            <li><span>Контакты</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->
@endsection

@section('contacts')

    <!-- Contact Details Section Start -->
    <div class="section section-padding">
        <div class="container">
            <div class="row">
                <!-- Section Title Start -->
                <div class="col-12 section-title" data-aos="fade-up" data-aos-delay="300">
                    <h2 class="title">Связаться с нами</h2>
                    <span></span>
                    <p class="sub-title">Вы можете в любой момент связаться с нами</p>
                </div>
                <!-- Section Title End -->
            </div>
            <div class="row row-cols-sm-2 row-cols-lg-4 row-cols-1 mb-n6">
                @foreach($contacts as $contact)
                    <div class="col mb-6" data-aos="fade-up" data-aos-delay="300">

                        <!-- Single Contact Address Start -->
                        <div class="single-contact-address">
                            <div class="contact-address-icon">
                                <i class="pe-7s-map-marker"></i>
                            </div>
                            <h4 class="title">Адрес</h4>
                            <p><span>{{ $contact->address }}</span></p>
                        </div>
                        <!-- Single Contact Address End -->

                    </div>

                    <div class="col mb-6" data-aos="fade-up" data-aos-delay="400">

                        <!-- Single Contact Address Start -->
                        <div class="single-contact-address">
                            <div class="contact-address-icon">
                                <i class="pe-7s-call"></i>
                            </div>
                            <h4 class="title">Номер телефона</h4>
                            <p>{{ $contact->number }}</p>
                        </div>
                        <!-- Single Contact Address End -->

                    </div>

                    <div class="col mb-6" data-aos="fade-up" data-aos-delay="500">

                        <!-- Single Contact Address Start -->
                        <div class="single-contact-address">
                            <div class="contact-address-icon">
                                <i class="pe-7s-clock"></i>
                            </div>
                            <h4 class="title">Часы работы</h4>
                            <p><span>{{ $contact->opening_hours }}</span></p>
                        </div>
                        <!-- Single Contact Address End -->

                    </div>

                    <div class="col mb-6" data-aos="fade-up" data-aos-delay="600">

                        <!-- Single Contact Address Start -->
                        <div class="single-contact-address">
                            <div class="contact-address-icon">
                                <i class="pe-7s-mail"></i>
                            </div>
                            <h4 class="title">Email</h4>
                            <p>{{ $contact->email }}</p>
                        </div>
                        <!-- Single Contact Address End -->

                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Contact Details Section End -->
@endsection

@section('map')
    <!-- Contact Map Start -->
    <div class="section section-padding pt-0" data-aos="fade-up" data-aos-delay="300">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!--Google Map Area Start-->
                    <div class="google-map-area w-100">
                        <iframe class="contact-map"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2280.2978498493744!2d61.44231066546217!3d55.14306639631918!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x8ca910620d48c42d!2z0J_QvtC70LjRgtC10YXQvdC40YfQtdGB0LrQuNC5INC60L7QvNC_0LvQtdC60YEg0K7QttC90L4t0KPRgNCw0LvRjNGB0LrQvtCz0L4g0LPQvtGB0YPQtNCw0YDRgdGC0LLQtdC90L3QvtCz0L4g0YLQtdGF0L3QuNGH0LXRgdC60L7Qs9C-INC60L7Qu9C70LXQtNC20LA!5e0!3m2!1sru!2sru!4v1617354158242!5m2!1sru!2sru"
                                allowfullscreen="" loading="lazy"></iframe>
                    </div>
                    <!--Google Map Area Start-->
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Map End -->
@endsection

@section('bid')
    <div class="section-fluid bid section-padding pt-0" id="bid">
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
                            <div class="col-md-6">
                                <div class="text-center px-1">
                                    <div class="forms p-4 py-5 bg-white">
                                        @if(session('success'))
                                            <div class="alert alert-success" role="alert">
                                                <h4><i class="icon fa fa-check"></i>{{ session('success') }}</h4>
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
