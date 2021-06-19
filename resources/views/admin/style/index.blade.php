@extends('layouts.admin_layout')

@section('title', 'Все стили')

@section('content')

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Стиль - {{ $work->title }}</h1>
                    <a class="btn btn-secondary btn-sm mt-2" href="{{ route('work.index') }}">
                        <i class="fas fa-arrow-left">
                        </i>
                    </a>
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
                                Описание
                            </th>
                            <th>
                                Изображения
                            </th>
                            <th style="width: 15%">
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    {{ $style['id'] }}
                                </td>
                                <td>
                                    {{ $style['name'] }}
                                </td>
                                <td>
                                    {{ $style->description }}
                                </td>
                                <td>
                                    <a href="{{ route('style.image_index', $style['id']) }}">Изображения</a>
                                </td>
                                <td class="project-actions text-right">
                                    <a class="btn btn-success btn-sm" href="">
                                        <i class="fas fa-plus">
                                        </i>
                                    </a>
                                    <a class="btn btn-info btn-sm" href="{{ route('style.edit', $style['id']) }}">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                    </a>
                                    <form action="{{ route('style.destroy', $style['id']) }}" method="post" style="display:inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm delete-btn">
                                            <i class="fas fa-trash">
                                            </i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->

@endsection
