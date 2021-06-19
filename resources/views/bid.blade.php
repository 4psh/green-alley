@extends('layouts.app')

@section('title', 'Оставить заявку')

@section('bid')
    <div class="section-fluid bid section-padding pt-0" id="bid">
        <div class="wrapper" data-aos="fade-up" data-aos-delay="300">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-md-11">
                    <div class="contact-us text-center">
                        <div class="row">
                            <div class="col-md-6 contacts">
                                <div class="text-center all-contacts">
                                    @foreach($contacts as $contact)
                                        <div class="d-flex flex-row align-items-center"><span class="icons">
                                                <i class="fa fa-map-marker"></i>
                                            </span>
                                            <div class="address text-left">
                                                <span><u>Адрес</u></span>
                                                <p>{{ $contact->address }}</p>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-row align-items-center mt-3">
                                            <span class="icons"><i class="fa fa-phone"></i></span>
                                            <div class="address text-left"><span><u>Номер телефона</u></span>
                                                <p>{{ $contact->number }}</p>
                                            </div>
                                        </div>
                                        <div
                                            class="d-flex flex-row align-items-center mt-3">
                                            <span class="icons"><i class="fa fa-envelope-o"></i></span>
                                            <div class="address text-left">
                                                <span><u>Email</u></span>
                                                <p>{{ $contact->email }}</p>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="text-center px-1">
                                    <div class="forms p-4 py-5 bg-white">
                                        @if(session('success'))
                                            <div class="alert alert-success" role="alert">
                                                <h4><i class="icon fa fa-check"></i>{{ session('success') }}</h4>
                                            </div>
                                        @endif
                                        <form method="post"
                                              action="{{  route('bid.store') }}">
                                            @csrf
                                            <h5>Оставить заявку</h5>
                                            <div class="mt-4 inputs">
                                                <input type="text" class="form-control" placeholder="Имя"
                                                       name="name" required>
                                                <input type="email" class="form-control" placeholder="Email"
                                                       name="email" required>
                                                <input type="tel" class="form-control" placeholder="Номер телефона"
                                                       name="number" required>
                                                <select name="id_service" class="form-control" required>
                                                    @foreach ($services as $service)
                                                        <option
                                                            value="{{ $service['id'] }}">{{ $service['title'] }}</option>
                                                    @endforeach
                                                </select>
                                                <textarea class="form-control" placeholder="Опишите детали заявки"
                                                          name="description" required></textarea>
                                            </div>
                                            <div class="button mt-4 text-left">
                                                <button type="submit" class="btn btn-warning">Отправить
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
