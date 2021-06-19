@extends('layouts.admin_layout')

@section('title', 'Добавить категорию')

@section('content')

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Редактировать категорию: {{ $category['title'] }}</h1>
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
                        <form action="{{ route('category.update', $category['id']) }}" method="post"  enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="title">Название</label>
                                    <input type="text" class="form-control" id="title"
                                           placeholder="Введите название категории" required name="title" value="{{ $category['title'] }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Краткое описание</label>
                                    <input type="text" class="form-control" id="brief"
                                           placeholder="Введите описание категории" required name="brief" value="{{ $category['brief'] }}">
                                </div>
                                <div class="form-group">
                                    <label for="image">Заменяемое изображение:</label><br>
                                    <img src="/storage/image/categories/{{ $category->image }}" class="img-watch">
                                </div>
                                <div class="form-group">
                                    <label for="image">Изображение</label>
                                    <input type="file" class="form-control" id="image" onChange="myFunc(this)" multiple
                                           required name="image" value="{{ old($category['image']) }}">
                                </div>
                                <div class="form-group mb-5">
                                    <label for="image">Новое изображение:</label>
                                    <div id="images"></div>
                                </div>
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


