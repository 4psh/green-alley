@extends('layouts.admin_layout')

@section('title', 'Главная')

@section('content')


    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Главная</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>{{ $services_count }}</h3>

                            <p>Услуги</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        <a href="{{ route('service.index') }}" class="small-box-footer">Все услуги <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-secondary">
                        <div class="inner">
                            <h3>{{ $pages_count }}</h3>

                            <p>Страницы</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-clipboard"></i>
                        </div>
                        <a href="{{ route('category.index') }}" class="small-box-footer">Все страницы <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>{{ $categories_count }}</h3>

                            <p>Категории услуг</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="{{ route('category.index') }}" class="small-box-footer">Все категории услуг <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>{{ $employees_count }}</h3>

                            <p>Сотрудники</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-stalker"></i>
                        </div>
                        <a href="{{ route('employee.index') }}" class="small-box-footer">Все сотрудники <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>{{ $employees_count }}</h3>

                            <p>Примеры работ</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-star"></i>
                        </div>
                        <a href="{{ route('work.index') }}" class="small-box-footer">Все примеры <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-orange">
                        <div class="inner">
                            <h3>{{ $bids_count }}</h3>

                            <p>Заявки</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-email"></i>
                        </div>
                        <a href="{{ route('bid.index') }}" class="small-box-footer">Все заявки <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-pink">
                        <div class="inner">
                            <h3>{{ $about_count }}</h3>

                            <p>Статьи "О нас"</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-navicon"></i>
                        </div>
                        <a href="{{ route('about.index') }}" class="small-box-footer">Все статьи <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-teal">
                        <div class="inner">
                            <h3>{{ $contacts_count }}</h3>

                            <p>Контакты</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-map"></i>
                        </div>
                        <a href="{{ route('contact.index') }}" class="small-box-footer">Все контакты <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-indigo">
                        <div class="inner">
                            <h3>{{ $socials_count }}</h3>

                            <p>Соц.сети</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-chatbubbles"></i>
                        </div>
                        <a href="{{ route('social.index') }}" class="small-box-footer">Все соц.сети <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-blue">
                        <div class="inner">
                            <h3>{{ $styles_count }}</h3>

                            <p>Стили</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-paintbrush"></i>
                        </div>
                        <a href="{{ route('style.index') }}" class="small-box-footer">Все стили <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>


            </div>
            <!-- /.row -->
            <!-- Main row -->

            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
