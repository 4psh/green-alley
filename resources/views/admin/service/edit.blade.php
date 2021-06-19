@extends('layouts.admin_layout')

@section('title', 'Редактировать услугу')

@section('content')

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Редактировать услугу: {{ $service['title'] }}</h1>
                    <a class="btn btn-secondary btn-sm mt-2" href="{{ route('category.index') }}">
                        <i class="fas fa-arrow-left">
                        </i>
                    </a>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            @if(session('success'))
                <div class="alert alert-success" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                    <h4><i class="icon fa fa-check"></i>{{ session('success') }}</h4>
                </div>
            @endif
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-primary">
                        <!-- form start -->
                        <form action="{{ route('service.update', $service['id']) }}" method="post"
                              enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="title">Название</label>
                                    <input type="text" class="form-control" id="title"
                                           placeholder="Введите название услуги" required name="title"
                                           value="{{ $service['title'] }}">
                                </div>
                                <div class="form-group">
                                    <label for="note">Примечание</label>
                                    <input type="text" class="form-control" id="note"
                                           placeholder="Введите примечание услуги" required name="note"
                                           value="{{ $service['note'] }}">
                                </div>
                                <div class="form-group">
                                    <label for="min_price">Минимальная цена</label>
                                    <input type="number" class="form-control" id="min_price"
                                           placeholder="Введите минимальную цену услуги" required name="min_price"
                                           value="{{ $service['min_price'] }}">
                                </div>
                                <div class="form-group">
                                    <label>Выберите единицу измерения цены</label>
                                    <select name="id_unit" class="form-control" required>
                                        @foreach ($units as $unit)
                                            <option value="{{ $unit['id'] }}">{{ $unit['name'] }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Выберите категорию</label>
                                    <select name="id_cat" class="form-control" required>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category['id'] }}">{{ $category['title'] }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Обновить</button>
                                </div>
                        </form>
                    </div><!-- /.container-fluid -->
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->

@endsection
