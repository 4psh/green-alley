@extends('layouts.admin_layout')

@section('title', 'Добавить сотрудника')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Добавить сотрудника</h1>
                    <a class="btn btn-secondary btn-sm mt-2" href="{{ route('employee.index') }}">
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
                        <form action="{{ route('employee.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="surname">Фамилия</label>
                                        <input type="text" class="form-control" id="surname"
                                               placeholder="Введите фамилию сотрудника" required name="surname">
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Имя</label>
                                        <input type="text" class="form-control" id="name"
                                               placeholder="Введите имя сотрудника" required name="name">
                                    </div>

                                    <div class="form-group">
                                        <label for="post">Должность</label>
                                        <input type="text" class="form-control" id="post"
                                               placeholder="Введите должность сотрудника" required name="post">
                                    </div>

                                    <div class="form-group">
                                        <label class="form-control" for="image">Изображение:</label>
                                        <input type="file" class="form-control" id="image" name="image">
                                        <div id="images"></div>
                                    </div>

                                </div>
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
