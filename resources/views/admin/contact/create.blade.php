@extends('layouts.admin_layout')

@section('title', 'Добавить контактные данные')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Добавить контактные данные</h1>
                    <a class="btn btn-secondary btn-sm mt-2" href="{{ route('contact.index') }}">
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
                        <form action="{{ route('contact.store') }}" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Адрес</label>
                                    <input type="text" name="address" class="form-control"
                                           id="exampleInputEmail1" placeholder="Введите адрес" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email</label>
                                    <input type="email" class="form-control" id="email"
                                           placeholder="Введите электронную почту" required name="email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Номер телефона</label>
                                    <input type="tel" class="form-control" id="number"
                                           placeholder="Введите номер телефона" required name="number">
                                </div>
                                <div class="form-group">
                                    <label for="opening_hours">Часы работы</label>
                                    <input type="text" class="form-control" id="opening_hours"
                                           placeholder="Введите часы работы компании" required name="opening_hours">
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
