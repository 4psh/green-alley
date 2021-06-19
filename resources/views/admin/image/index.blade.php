@extends('layouts.admin_layout')

@section('title', 'Все изображения')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Все изображения - {{ $work->title }}</h1>
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
        <hr>
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid mb-3">
            <div class="row g-2">
                @foreach ($images as $image)
                    <div class="col-md-4">
                        <div class="card images">
                            <div class="img-container">
                                <div class="d-flex justify-content-between align-items-center p-2 first">
                                    <a href="{{ route('image.edit', $image['id']) }}">
                                        <span class="percent bg-success"><i class="fa fa-edit"></i></span></a>
                                    <form action="{{ route('image.destroy', $image['id']) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn wishlist bg-danger">
                                            <i class="fa fa-trash-alt"></i>
                                        </button>
                                    </form>
                                </div>
                                <img src="/storage/image/works/{{ $image['name'] }}" class="card-img-top" alt="">
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </section>
    <!-- /.content -->
@endsection
