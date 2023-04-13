@extends('layout')

@section('title', 'Inform')

@section('content')

    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="check-circle-fill" viewBox="0 0 16 16">
            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
        </symbol>
        <symbol id="info-fill" viewBox="0 0 16 16">
            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
        </symbol>
        <symbol id="exclamation-triangle-fill" viewBox="0 0 16 16">
            <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
        </symbol>
    </svg>

    {{-- @if( session('message') )
        <div class="alert alert-{{ session('message.type') }} alert-dismissible fade show d-flex align-items-center" role="alert">
            @if( session('message.type') == 'success' )
                <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Success:" style="width: 16px; height: 16px; fill: #75b798;"><use xlink:href="#check-circle-fill"/></svg>
            @elseif( session('message.type') == 'danger' )
                <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Danger:" style="width: 16px; height: 16px; fill: #ea868f;"><use xlink:href="#exclamation-triangle-fill"/></svg>
            @endif
            <strong>{{ session('message.text') }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif --}}

    <div class="toast-container position-fixed bottom-0 end-0 p-3">

        <div id="liveToast" class="toast @if( session('message') ) show @endif" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">

                @if( session('message.type') == 'success' )
                    <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Success:" style="width: 16px; height: 16px; fill: #75b798;"><use xlink:href="#check-circle-fill"/></svg>
                @elseif( session('message.type') == 'danger' )
                    <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Danger:" style="width: 16px; height: 16px; fill: #ea868f;"><use xlink:href="#exclamation-triangle-fill"/></svg>
                @endif

                <strong class="me-auto">
                    @if( session('message.type') == 'success' )
                        Успешно
                    @elseif( session('message.type') == 'danger' )
                        Неудача
                    @endif
                </strong>
                {{-- <small>11 mins ago</small> --}}
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">{{ session('message.text') }}</div>
        </div>
    </div>

    <form class="row g-3" action="{{ route('inform') }}" method="POST">

        @csrf

        <div class="col-md-12">
            <label for="name" class="form-label">Как к вам обращаться?</label>
            <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" id="name" value="{{ old('name') }}" placeholder="Мистер Гай Фокс" required>
            @error('name')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>

        <div class="col-md-12">
            <label for="department" class="form-label">Откуда вы?</label>
            <select name="department" class="form-select @error('department') is-invalid @enderror" id="department" required>
                <option selected disabled value="">Выберите подразделение</option>
                <option value="1">КЯ01</option>
                <option value="2">КЯ02</option>
                <option value="3">КЯ03</option>
            </select>
            @error('department')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>

        <div class="col-md-12">
            <label for="message" class="form-label">Сообщение</label>
            <textarea name="message" class="form-control @error('message') is-invalid @enderror" id="message" placeholder="Опишите ситуацию" required>{{ old('message') }}</textarea>
            @error('message')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>

        <div class="col-12 mt-5">
            <button type="submit" class="btn btn-warning w-100 d-md-none">Отправить</button>
            <button type="submit" class="btn btn-warning d-none d-md-block">
                Отправить
            </button>
        </div>

    </form>

    <style>

    </style>

@endsection
