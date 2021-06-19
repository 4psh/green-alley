@extends('layouts.admin_layout')

@section('title', 'Редактировать пример работы')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Редактировать пример работы: {{ $work['title'] }}</h1>
                    <a class="btn btn-secondary btn-sm mt-2" href="{{ route('work.index') }}">
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
                        <form action="{{ route('work.update', $work['id']) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Название</label>
                                    <input type="text" value="{{ $work['title'] }}" name="title" class="form-control"
                                           id="exampleInputEmail1" placeholder="Введите название выполненной работы" required>
                                </div>

                                <div class="form-group">
                                    <label for="description">Описание</label>
                                    <input type="text" value="{{ $work['description'] }}" name="description" class="form-control"
                                           id="description" placeholder="Введите описание выполненной работы" required>
                                </div>

                                    <div class="form-group">
                                        <label>Выберите категорию выполненной работы</label>
                                            <select name="id_service" class="form-control" required>
                                                @foreach ($services as $service)
                                                    <option value="{{ $service['id'] }}">{{ $service['title'] }}</option>
                                                @endforeach
                                            </select>
                                    </div>

                                <div class="form-group">
                                    <label>Выберите стиль выполненной работы</label>
                                    <select name="id_style" class="form-control" required>
                                        @foreach ($styles as $style)
                                            <option value="{{ $style['id'] }}">{{ $style['name'] }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="date">Дата выполнения</label>
                                    <input type="date" value="{{ $work['date'] }}" name="date" class="form-control"
                                           id="date" placeholder="Введите дату выполненной работы" required>
                                </div>
                                <div class="form-group">
                                    <label for="image">Заменяемое изображение:</label><br>
                                    <img src="/storage/image/works/{{ $work->image }}" class="img-watch">
                                </div>
                                <div class="form-group">
                                    <label for="image">Изображение</label>
                                    <input type="file" class="form-control" id="image" onChange="myFunc(this)" multiple
                                           required name="image" value="{{ ($work['image']) }}">
                                </div>
                                <div class="form-group mb-5">
                                    <label for="image">Новое изображение:</label>
                                    <div id="images"></div>
                                </div>

{{--                                <div class="form-group">--}}
{{--                                    <textarea name="text" class="editor">{{ $post['text'] }}</textarea>--}}
{{--                                </div>--}}
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
