@extends('layouts.admin_layout')

@section('title', 'Все статьи &laquo;О нас&raquo;')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Все статьи &laquo;О нас&raquo;</h1>
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
                                Заголовок
                            </th>
                            <th>
                                Краткое описание
                            </th>
                            <th>
                                Изображение
                            </th>
                            <th style="width: 10%">
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($abouts as $about)
                            <tr>
                                <td>
                                    {{ $about['id'] }}
                                </td>
                                <td>
                                    {{ $about['title'] }}
                                </td>
                                <td>
                                    {{ $about['brief'] }}
                                </td>
                                <td class="img_box">
                                    <img src="/storage/image/about/{{ $about['image'] }}" alt="">
                                </td>
                                <td class="project-actions text-right">
                                    <a class="btn btn-info btn-sm" href="{{ route('about.edit', $about['id']) }}">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                    </a>
                                    <form action="{{ route('about.destroy', $about['id']) }}" method="POST"
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
