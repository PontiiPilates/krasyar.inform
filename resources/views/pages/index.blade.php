@extends('layout')

@section('title', 'Сообщение о нарушении')

@section('content')

    <h1>Сообщение о нарушении</h1>
    <p><i class="bi bi-robot text-danger"> Отправляется анонимно</i></p>

    <div class="card mt-5 mb-5">
        <div class="card-body">
            Этот раздел заполняется сотрудниками нашей компании. Здесь вы можете сообщить о хамстве, махинациях или
            недобросовестных действиях со стороны ваших коллег. А еще вы можете оставить рекомендации или пожелания по
            улучшению условий труда.
        </div>
    </div>

    @include('components.navigation')

@endsection
