@extends('layout')

@section('title', 'Сообщение о нарушении')

@section('content')

    @include('elements.info_message')

    <h1 class="mb-5">Сообщение о нарушении в Красном Яре</h1>

    <form class="row g-3 mb-5" action="{{ route('krasyarSend') }}" method="POST">
        @csrf

        @include('elements.select_department_krasyar')
        @include('elements.select_theme_message_shops')
        @include('elements.enter_message')
        {{-- @include('elements.send_button') --}}

        <div class="col-12 mt-5">
            <button type="submit" class="btn btn-danger w-100 d-md-none">Отправить</button>
            <button type="submit" class="btn btn-danger d-none d-md-block">Отправить</button>
        </div>

    </form>

@endsection
