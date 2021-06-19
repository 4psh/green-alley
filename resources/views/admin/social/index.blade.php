@extends('layouts.admin_layout')

@section('title', 'Все социальные сети')

@section('content')

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Все соц.сети</h1>
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
                                Иконка
                            </th>
                            <th>
                                Ссылка
                            </th>
                            <th style="width: 10%;"></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($social as $soc)
                            <tr>
                                <td>
                                    {{ $soc['id'] }}
                                </td>
                                <td>
                                    {{ $soc['name'] }}
                                </td>
                                <td>
                                    <a class="btn btn-outline-dark btn-floating m-1" role="button"><i class="fab fa-{{ $soc->name }}"></i></a>
                                </td>
                                <td>
                                    {{ $soc['link'] }}
                                </td>
                                <td class="project-actions text-right">
                                    <a class="btn btn-info btn-sm" href="{{ route('social.edit', $soc['id']) }}">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                    </a>
                                    <form action="{{ route('social.destroy', $soc['id']) }}" method="post" style="display:inline-block">
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
