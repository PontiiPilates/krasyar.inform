@extends('layout')

@section('title', 'Сообщение о нарушении')

@section('content')

    @include('elements.info_message')

    <h1 class="mb-5">Пожелания по улучшению условий труда</h1>

    <form class="row g-3 mb-5" action="{{ route('improve') }}" method="POST">
        @csrf

        @include('elements.select_structure')
        @include('elements.select_department_krasyar')
        @include('elements.select_department_discounter')
        @include('elements.enter_message')
        @include('elements.send_button')

    </form>

@endsection
