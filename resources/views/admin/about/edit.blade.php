@extends('layouts.admin_layout')

@section('title', 'Редактировать описание laquo;О нас&raquo;')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Редактировать описание: {{ $about['id'] }} - {{ $about['title'] }}</h1>
                    <a class="btn btn-secondary btn-sm mt-2" href="{{ route('about.index') }}">
                        <i class="fas fa-arrow-left">
                        </i>
                    </a>
                </div><!-- /.col -->
            </div><!-- /.row -->
            @if (session('success'))
                <div class="alert alert-success" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-check"></i>{{ session('success') }}</h4>
                </div>
            @endif
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-primary">
                        <!-- form start -->
                        <form action="{{ route('about.update', $about['id']) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="title">Заголовок</label>
                                    <input type="text" class="form-control" id="title"
                                           required name="title"
                                           value="{{ $about->title }}">
                                </div>
                                <div class="form-group">
                                    <label for="brief">Краткое описание</label>
                                    <input type="text" class="form-control" id="brief"
                                           required name="brief"
                                           value="{{ $about->brief }}">
                                </div>
                                <div class="form-group">
                                    <label for="description">Описание</label>
                                    <textarea class="form-control" name="description">{{ $about->description }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="image">Заменяемое изображение:</label><br>
                                    <img src="/storage/image/about/{{ $about->image }}" class="img-watch">
                                </div>
                                <div class="form-group">
                                    <label for="image">Изображение</label>
                                    <input type="file" class="form-control" id="image" onChange="myFunc(this)" multiple
                                           required name="image" value="{{ ($about['image']) }}">
                                </div>
                                <div class="form-group mb-5">
                                    <label for="image">Новое изображение:</label>
                                    <div id="images"></div>
                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Сохранить</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
