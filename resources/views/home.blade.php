@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card home">
                    @foreach($users as $user)
                        <div class="card-header">Здравствуйте, {{ $user->name }}!</div>
                    @endforeach
                    <div class="card-body link-admin">
    
                        Вы успешно авторизовались! Перейти в <a href="{{ Route('homeAdmin') }}" class="text-decoration-underline">личный кабинет</a>.
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
