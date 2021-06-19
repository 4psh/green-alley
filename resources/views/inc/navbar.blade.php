<!-- Header Section Start -->
<div class="header section">

    <!-- Header Top Start -->
    <div class="header-top bg-secondary">
        <div class="container">
            <div class="row align-items-center">
                <!-- Header Top Link/Search Start -->
                <div class="col-lg-8 col-md-12">
                    <ul class="header-top-links">
                        @foreach($contacts as $contact)
                            <li><i class="fa fa-phone"></i>{{ $contact->number }}</li>
                            <li><i class="fa fa-envelope-o"></i>{{ $contact->email }}</li>
                            <li><i class="fa fa-clock-o"></i><span>{{ $contact->opening_hours }}</span></li>
                        @endforeach
                    </ul>
                </div>
                <!-- Header Top Link/Search End -->
                <!-- Header Top Action Bar Start -->
                <div class="col-lg-4 col-md-12 text-md-right">
                    <a href="#bid" class="btn btn-hover-secondary btn-primary font-weight-bold">Оставить заявку</a>
                </div>
                <!-- Header Top Action Bar End -->
            </div>
        </div>
    </div>
    <!-- Header Top End -->

    <!-- Header Bottom Start -->
    <div class="header-bottom section header-sticky">
        <div class="container">
            <div class="row align-items-center">
                <!-- Header Logo Start -->
                <div class="col-lg-3 col-6">
                    <div class="header-logo">
                        <a href="{{ route('index') }}"><img src="{{ asset('storage/logo/logo.png') }}" alt="Site Logo" width="220"/></a>
                    </div>
                </div>
                <!-- Header Logo End -->

                <!-- Header Menu Start -->
                <div class="col-lg-9 col-6">
                    <!-- Main Menu Start -->
                    <div class="main-menu d-none d-lg-flex">
                        <ul>
                            <li><a href="{{ route('index') }}">Главная</a></li>
                            <li><a href="{{ route('about') }}">О нас</a></li>
                            <li><a href="{{ route('categories') }}">Услуги</a></li>
                            <li><a href="{{ route('styles') }}">Стили работ</a></li>
                            <li><a href="{{ route('works') }}">Наши работы</a></li>
                            <li><a href="{{ route('contacts') }}">Контакты</a></li>
                        </ul>
                    </div>
                    <!-- Main Menu End -->

                    <!-- Main Menu Riht Side Start -->
                    <div class="main-menu-right-side d-flex d-lg-none">

                        <!-- Mobile Menu Bar Start -->
                        <div class="mobile-menu-bar-wrapper">
                            <a href="#" class="mobile-menu-bar"><i class="fa fa-bars"></i></a>
                        </div>
                        <!-- Mobile Menu Bar End -->

                    </div>
                    <!-- Main Menu Riht Side End -->

                </div>
                <!-- Header Menu End -->
            </div>
        </div>
    </div>
    <!-- Header Bottom End -->

    <!-- Mobile Menu Start -->
    <div class="mobile-menu-wrapper">
        <div class="body-overlay"></div>
        <!-- Mobile Menu Inner Start -->
        <div class="mobile-menu-inner">

            <!-- Button Close Start -->
            <div class="btn-close-bar">
                <i class="pe-7s-close"></i>
            </div>
            <!-- Button Close End -->

            <!-- mobile menu start -->
            <div class="mobile-navigation">
                <nav>
                    <ul class="mobile-menu">
                        <li><a href="{{ route('index') }}">Главная</a></li>
                        <li><a href="{{ route('about') }}">О нас</a></li>
                        <li><a href="{{ route('categories') }}">Услуги</a></li>
                        <li><a href="{{ route('styles') }}">Стили работ</a></li>
                        <li><a href="{{ route('works') }}">Наши работы</a></li>
                        <li><a href="{{ route('contacts') }}">Контакты</a></li>
                    </ul>
                </nav>
            </div>
            <!-- mobile menu end -->

            <!-- Contact Links/Social Links Start -->
            <div class="mt-auto">
                <!-- Contact Link Start -->
                <ul class="contact-links">
                    @foreach($contacts as $contact)
                        <li><i class="fa fa-phone"></i>{{ $contact->number }}</li>
                        <li><i class="fa fa-envelope-o"></i>{{ $contact->email }}</li>
                        <li><i class="fa fa-clock-o"></i><span>{{ $contact->opening_hours }}</span></li>
                    @endforeach
                </ul>
                <!-- Contact Link End -->

                <!-- Social Widget Start -->
                <div class="widget-social">
                    @foreach($social as $soc)
                        <a title="{{ $soc->name }}" href="{{ $soc->link }}"><i class="fa fa-{{ $soc->name }}"></i></a>
                    @endforeach
                </div>
                <!-- Social Widget End -->
            </div>
            <!-- Contact Links/Social Links End -->

        </div>
        <!-- Mobile Menu Inner End -->
    </div>
    <!-- Mobile Menu End -->
</div>
<!-- Header Section End -->
