@extends('layouts.admin_layout')

@section('title', 'Добавить изображение')

@section('content')

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Добавить изображение</h1>
                    <a class="btn btn-secondary btn-sm mt-2" href="{{ route('work.index', $work['id']) }}">
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
                        <form action="{{ route('image.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <h1 for="id_work">{{ $work->title }}</h1>
                                    <input type="hidden" class="form-control" id="id_work"
                                           required name="id_work"
                                           value="{{ $work->id }}">
                                </div>
                                <div class="form-group">
                                    <label class="form-control" for="image">Изображение:</label>
                                    <input type="file" class="form-control" id="image" name="image">
                                    <div id="images"></div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Добавить</button>
                            </div>
                        </form>
                    </div><!-- /.container-fluid -->
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->

@endsection


