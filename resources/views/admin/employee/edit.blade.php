@extends('layouts.admin_layout')

@section('title', 'Редактировать сотрудника')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Редактировать сотрудника: {{ $employee['surname'] }} {{ $employee['name'] }}</h1>
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
                        <form action="{{ route('employee.update', $employee['id']) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="surname">Фамилия</label>
                                    <input type="text" value="{{ $employee['surname'] }}" name="surname"
                                           class="form-control"
                                           id="surname" placeholder="Введите фамилию сотрудника" required>
                                </div>
                                    <div class="form-group">
                                        <label for="name">Имя</label>
                                        <input type="text" value="{{ $employee['name'] }}" name="name"
                                               class="form-control"
                                               id="name" placeholder="Введите имя сотрудника" required>
                                    </div>

                                <div class="form-group">
                                    <label for="post">Должность</label>
                                    <input type="text" value="{{ $employee['post'] }}" name="post" class="form-control"
                                           id="post" placeholder="Введите должность сотрудника" required>
                                </div>
                                <div class="form-group">
                                    <label for="image">Заменяемое изображение:</label><br>
                                    <img src="/storage/image/employees/{{ $employee->image }}" class="img-watch">
                                </div>
                                <div class="form-group">
                                    <label for="image">Изображение</label>
                                    <input type="file" class="form-control" id="image" onChange="myFunc(this)" multiple
                                           required name="image" value="{{ ($employee['image']) }}">
                                </div>
                                <div class="form-group mb-5">
                                    <label for="image">Новое изображение:</label>
                                    <div id="images"></div>
                                </div>

                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Сохранить</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
