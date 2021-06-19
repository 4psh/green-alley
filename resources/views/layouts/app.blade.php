<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Сегодня украшение садовых и парковых участков пользуется большой популярностью. Но не всем под силу украсить свой участок самостоятельно. Именно поэтому, люди обращаются в компании, которые  специализируются на разработке ландшафтного дизайна. С помощью современных технологий, а также с помощью функционального оборудования и аппаратуры, специалисты реализуют, по-настоящему, удивительные и неповторимые художественные проекты, которые становятся отличным украшением для любого садового участка." />
    <meta name="keywords" content="ландшафтный дизайн, услуги ландшафтного дизайна, украшение сада, украшение участка, ландшафт, садовые участки, компания зеленая аллея, озеленение, благоустройство, услуги садовника, landscape, design, gardener, garden, green alley, дачный ландшафтный дизайн, ландшафтный дизайн садового участка, ландшафтный дизайн дачного участка" />
    <meta name="yandex-verification" content="4029ea41ec8ed0c1" />
    

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css"
          integrity="sha256-2XFplPlrFClt0bIdPgpz8H7ojnk10H69xRqd9+uTShA=" crossorigin="anonymous"/>

    <!-- Styles -->
    <link rel="stylesheet" href="/css/vendor.min.css">
    <link rel="stylesheet" href="/css/plugins.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/app.css">

    <!-- Scripts -->
    <link href="/css/colorbox.css" rel="stylesheet">

    <link rel="shortcut icon" href="/storage/logo/favicon.ico" type="image/x-icon или image/vnd.microsoft.icon ">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="/css/pe-icon-7-stroke.min.css">

</head>
<body>

<a id="top"></a>

@include('inc.navbar')

<!--        Главная страница        -->
@if(Request::is('/'))
    @include('inc.master')

    @include('inc.slide')

    @yield('about')

    @yield('categories')

    @yield('works')

    @yield('employees')

    @yield('bid')
@endif


<!--        О нас        -->
@if(Route::is('about'))
    @include('inc.master')
    
    @yield('banner')

    @yield('about')

    @yield('categories')

    @yield('employees')

    @yield('contacts')
@endif


<!--        Категории услуг        -->
@if(Route::is('categories'))
    @include('inc.master')

    @yield('banner')

    @yield('categories')

    @yield('contacts')
@endif

<!--        Услуги        -->
@if(Route::is('services'))
    @include('inc.master')

    @yield('banner')

    @yield('service')

    @yield('contacts')
@endif

<!--        Заявка        -->
@if(Route::is('bids'))
    @include('inc.master')

    @yield('bid')

    @yield('contacts')
@endif


<!--        Стили        -->
@if(Route::is('styles'))
    @include('inc.master')

    @yield('banner')

    @yield('style')

    @yield('contacts')
@endif

<!--        Стиль одной работы        -->
@if(Route::is('style'))
    @include('inc.master')

    @yield('banner')

    @yield('style')

    @yield('contacts')
@endif

<!--        Примеры работ        -->
@if(Route::is('works'))
    @include('inc.master')

    @yield('banner')

    @yield('works')

    @yield('contacts')
@endif

<!--        Галерея работ        -->
@if(Route::is('all-images'))
    @yield('banner')

    @yield('image')

    @yield('contacts')
@endif

<!--        Контакты        -->
@if(Route::is('contacts'))
    @include('inc.master')

    @yield('banner')

    @yield('contacts')

    @yield('map')

    @yield('bid')

@endif


<!--        Авторизация, регистрация        -->
@if(Route::has('login') || Route::has('register') || Route::has('home'))

    @yield('content')

@endif

@include('inc.footer')


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"
        integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"
        integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"
        integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"
        integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous">
</script>
<script src="https://kit.fontawesome.com/00bd884958.js" crossorigin="anonymous"></script>


<!-- Scroll Top End -->
<script src="/js/vendor.min.js"></script>
<script src="/js/plugins.min.js"></script>

<script type="text/javascript" src="/js/colorbox/jquery.colorbox-min.js"></script>
<script type="text/javascript" src="/js/colorbox/jquery.colorbox.js"></script>

<!--Main JS-->
<script src="/js/main.js"></script>

<script src="/js/calculate.js"></script>

</body>
</html>
