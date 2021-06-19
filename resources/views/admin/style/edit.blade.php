@extends('layouts.admin_layout')

@section('title', 'Редактировать стиль')

@section('content')

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Редактировать стиль: {{ $style['name'] }}</h1>
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
                        <form action="{{ route('style.update', $style['id']) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name">Название</label>
                                    <input type="text" class="form-control" id="name"
                                           placeholder="Введите название стиля" required name="name" value="{{ $style->name }}">
                                </div>
                                <div class="form-group">
                                    <label for="description">Описание</label>
                                    <textarea class="form-control" name="description">{{ $style->description }}</textarea>
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


