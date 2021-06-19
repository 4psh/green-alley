@extends('layouts.admin_layout')

@section('title', 'Редактировать изображение')

@section('content')

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Редактировать изображение - {{ $img->name }}</h1>
                    <a class="btn btn-secondary btn-sm mt-2" href="{{ route('style.index') }}">
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
                        <form action="{{ route('img.update', $img['id']) }}" method="post"
                              enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="image">Заменяемое изображение:</label><br>
                                    <img src="/storage/image/styles/{{ $img->name }}" class="img-watch">
                                </div>
                                <div class="form-group">
                                    <label for="image">Изображение</label>
                                    <input type="file" name="image" onChange="myFunc(this)" multiple id="image"  class="form-control"/>
                                </div>
                                <div class="form-group mb-5">
                                    <label for="image">Новое изображение:</label>
                                    <div id="images"></div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Изменить</button>
                            </div>
                        </form>
                    </div><!-- /.container-fluid -->
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->

@endsection

