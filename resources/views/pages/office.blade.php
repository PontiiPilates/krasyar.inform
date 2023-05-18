@extends('layout')

@section('title', 'Сообщение о нарушении')

@section('content')

    @include('elements.info_message')

    <h1 class="mb-5">Оставить сообщение о работе центрального офиса</h1>

    <form class="row g-3 mb-5" action="{{ route('officeSend') }}" method="POST">
        @csrf

        @include('elements.select_theme_message_office')
        @include('elements.enter_message')
        @include('elements.send_button')

    </form>

@endsection
