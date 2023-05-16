@extends('layout')

@section('title', 'Сообщение о нарушении')

@section('content')

    @include('elements.info_message')

    <h1 class="mb-5">Сообщение о нарушении в Красном Яре</h1>

    <form class="row g-3 mb-5" action="{{ route('krasyar') }}" method="POST">
        @csrf

        @include('elements.select_department_krasyar')
        @include('elements.select_theme_message_shops')
        @include('elements.enter_message')
        @include('elements.send_button')

    </form>

@endsection
