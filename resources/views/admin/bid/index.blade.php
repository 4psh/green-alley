@extends('layouts.admin_layout')

@section('title', 'Все заявки')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Все заявки</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <form action="{{ route('done_index') }}" method="get" class="ml-2 form-filter">
                <label>Кол-во заявок: {{ count($bids) }}</label>
                <div class="input-group mb-3">
                    <select name="status" class="form-control row g-3">
                        <option value="all" {{ 'all' == session('status') ? 'selected' : '' }}>Все</option>
                        <option value="1" {{ 1 == session('status') ? 'selected' : '' }}>Выполненные</option>
                        <option value="0" {{ 0 == session('status') ? 'selected' : '' }}>Не выполненные</option>
                    </select>
                    <button type="submit" class="btn btn-info btn-sm btn-filter">
                        <i class="fas fa-search">
                        </i>
                        Найти
                    </button>
                </div>
            </form>
            <div class="card">
                <div class="card-body p-0">
                    <table class="table table-striped projects">
                        <thead>
                        <tr>
                            <th style="width: 5%">
                                ID
                            </th>
                            <th>
                                Имя клиента
                            </th>
                            <th>
                                Email
                            </th>
                            <th>
                                Номер телефона
                            </th>
                            <th>
                                Услуга
                            </th>
                            <th>
                                Описание
                            </th>
                            <th style="width: 15%">
                                Статус заявки
                            </th>
                            <th style="width: 10%">
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($bids as $bid)
                            <tr>
                                <td>
                                    {{ $bid['id'] }}
                                </td>
                                <td>
                                    {{ $bid['name'] }}
                                </td>
                                <td>
                                    {{ $bid['email'] }}
                                </td>
                                <td>
                                    {{ $bid['number'] }}
                                </td>
                                <td>
                                    {{ $bid->service['title'] }}
                                </td>
                                <td>
                                    {{ $bid['description'] }}
                                </td>
                                <td>
                                    <form action="{{ route('bid.update', $bid['id']) }}" method="POST">
                                        @csrf
                                        @method('PATCH')
                                        <input type="checkbox"
                                               id="status"
                                               name="status"
                                               {{ $bid->status ? 'checked' : ''}}
                                               onchange="this.form.submit()">
                                        <label class="font-weight-normal text-{{ $bid->status ? 'green' : 'red' }}"
                                               for="status">{{ $bid->status ? 'Выполнена' : 'Не выполнена' }}</label>
                                    </form>
                                </td>
                                <td class="project-actions text-right">
                                    <form action="{{ route('bid.destroy', $bid['id']) }}" method="POST"
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
