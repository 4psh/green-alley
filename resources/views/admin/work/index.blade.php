@extends('layouts.admin_layout')

@section('title', 'Все примеры работ')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Все примеры работ</h1>
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
            <div class="card">
                <div class="card-body p-0">
                    <table class="table table-striped projects">
                        <thead>
                        <tr>
                            <th style="width: 5%">
                                ID
                            </th>
                            <th>
                                Название
                            </th>
                            <th>
                                Описание
                            </th>
                            <th>
                                Дата
                            </th>
                            <th>
                                Тип услуги
                            </th>
                            <th>
                                Изображения
                            </th>
                            <th>
                                Стиль
                            </th>
                            <th style="width: 15%">
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($works as $work)
                            <tr>
                                <td>
                                    {{ $work['id'] }}
                                </td>
                                <td>
                                    {{ $work['title'] }}
                                </td>
                                <td>
                                    {{ $work['description'] }}
                                </td>
                                <td>
                                    {{ $work['date'] }}
                                </td>
                                <td>
                                    {{ $work->service['title'] }}
                                </td>
                                <td>
                                    <a href="{{ route('image.image_index', $work['id']) }}">Изображения</a>
                                </td>
                                <td>
                                    <a href="{{ route('style_index', $work['id']) }}">{{ $work->style['name'] }}</a>
                                </td>

                                <td class="project-actions text-right">
                                    <a class="btn btn-success btn-sm" href="{{ route('image.image_create', $work['id']) }}">
                                        <i class="fas fa-plus">
                                        </i>
                                    </a>
                                    <a class="btn btn-info btn-sm" href="{{ route('work.edit', $work['id']) }}">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                    </a>
                                    <form action="{{ route('work.destroy', $work['id']) }}" method="POST"
                                          style="display: inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm delete-btn">
                                            <i class="fas fa-trash">
                                            </i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach


                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
