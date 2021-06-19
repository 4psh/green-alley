@extends('layouts.admin_layout')

@section('title', 'Добавить описание &laquo;О нас&raquo;')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Добавить описание &laquo;О нас&raquo;</h1>
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
                        <form action="{{ route('about.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="title">Заголовок</label>
                                    <input type="text" class="form-control" id="title"
                                           required name="title"
                                           >
                                </div>
                                <div class="form-group">
                                    <label for="brief">Краткое описание</label>
                                    <input type="text" class="form-control" id="brief"
                                           required name="brief"
                                           >
                                </div>
                                <div class="form-group">
                                    <label for="description">Описание</label>
                                    <textarea class="form-control" name="description" ></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="image">Изображение</label>
                                    <input type="file" class="form-control" id="image"
                                           required name="image">
                                    <div id="images"></div>
                                </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Добавить</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
