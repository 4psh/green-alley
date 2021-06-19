<!-- Hero/Intro Slider Start -->
<div class="section">
    <div class="hero-slider swiper-container">
        <div class="swiper-wrapper">
            <div class="hero-slide-item swiper-slide">
                <div class="hero-slide-bg">
                    <img src="{{ asset('/storage/slider/slide_1.jpg') }}" alt="" />
                </div>
                <div class="container">
                    <div class="hero-slide-content text-center">
                        <h2 class="title">&laquo;Зеленая аллея&raquo;</h2>
                        <h4 class="title-sup mb-5">Создаем уютную и приятную атмосферу на любой территории</h4>
                            <a href="{{ route('about') }}" class="btn btn-hover-light btn-warning font-weight-bold">Подробнее</a>
                    </div>
                </div>
            </div>
            <div class="hero-slide-item swiper-slide">
                <div class="hero-slide-bg">
                    <img src="{{ asset('/storage/slider/slide_2.jpg') }}" alt="" />
                </div>
                <div class="container">
                    <div class="hero-slide-content text-center">
                        <h2 class="title">&laquo;Зеленая аллея&raquo;</h2>
                        <h4 class="title-sup mb-5">Наша задача быть всегда лучшими в ландшафтном дизайне и
                            благоустройстве частных участков</h4>
                            <a href="{{ route('categories') }}" class="btn btn-warning btn-hover-secondary font-weight-bold">Наши услуги</a>
                    </div>
                </div>
            </div>

            <div class="hero-slide-item swiper-slide">
                <div class="hero-slide-bg">
                    <img src="{{ asset('/storage/slider/slide_3.jpg') }}" alt="" />
                </div>
                <div class="container">
                    <div class="hero-slide-content text-center">
                        <h2 class="title">&laquo;Зеленая аллея&raquo;</h2>
                        <h4 class="title-sup mb-5">Чтобы участок был комфортным местом для жизни, в нем должен чувствоваться стиль</h4>
                        <a href="{{ route('styles') }}" class="btn btn-warning btn-hover-secondary font-weight-bold">Посмотреть стили</a>
                    </div>
                </div>
            </div>

        </div>

        <div class="swiper-pagination"></div>

        <div class="home-slider-prev swiper-button-prev main-slider-nav"><i class="fa fa-angle-left"></i></div>
        <div class="home-slider-next swiper-button-next main-slider-nav"><i class="fa fa-angle-right"></i></div>
    </div>
</div>
<!-- Hero/Intro Slider End -->
