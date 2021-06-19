@extends('layouts.admin_layout')

@section('title', 'Редактировать заявку')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Редактировать заявку: {{ $bid['id'] }} - {{ $bid['email'] }}</h1>
                    <a class="btn btn-secondary btn-sm mt-2" href="{{ route('bid.index') }}">
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
                        <form action="{{ route('bid.update', $bid['id']) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name">Имя клиента</label>
                                    <input type="text" class="form-control" id="name"
                                           required name="name"
                                           value="{{ $bid->name }}" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="number">Номер телефона</label>
                                    <input type="number" class="form-control" id="number"
                                           required name="number"
                                           value="{{ $bid->number }}" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email"
                                           required name="email"
                                           value="{{ $bid->email }}" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="description">Описание</label>
                                    <textarea class="form-control" name="description" disabled>{{ $bid->description }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="id_service">Наименование услуги</label>{{ $bid->service->name }}
                                    <input type="hidden" class="form-control" id="id_service"
                                           required name="id_service"
                                           value="{{ $bid->service->name }}" disabled>
                                </div>
                                <div class="form-group">
                                    <label>Статус заявки:</label><br>
                                    <input type="checkbox" id="status" value="{{ $bid->status ? 0 : 1 }}" name="status" {{ $bid->status ? 'checked' : '' }}>

                                    <label for="status">Выполнено</label>
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
