@extends('layouts.admin_layout')

@section('title', 'Все категории')

@section('content')

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Все категории</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
            @if(session('success'))
                <div class="alert alert-success" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
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
                            <th style="width: 1%">
                                ID
                            </th>
                            <th>
                                Название
                            </th>
                            <th>
                                Краткое описание
                            </th>
                            <th>
                                Изображение
                            </th>
                            <th style="width: 15%"></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($categories as $category)
                            <tr>
                                <td>
                                    {{ $category['id'] }}
                                </td>
                                <td>
                                    <a href="{{ route('service.service_index', $category['id']) }}">{{ $category['title'] }}</a>
                                </td>
                                <td>
                                    {{ $category['brief'] }}
                                </td>
                                <td class="img_box">
                                    <img src="/storage/image/categories/{{ $category['image'] }}" alt="">
                                </td>
                                <td class="project-actions text-right">
                                    <a class="btn btn-success btn-sm" href="{{ route('service.service_create', $category['id'])  }}">
                                        <i class="fas fa-plus">
                                        </i>
                                    </a>
                                    <a class="btn btn-info btn-sm" href="{{ route('category.edit', $category['id']) }}">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                    </a>
                                    <form action="{{ route('category.destroy', $category['id']) }}" method="post" style="display:inline-block">
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
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->

@endsection
