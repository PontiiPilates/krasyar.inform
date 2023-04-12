@extends('layout')

@section('title', 'Inform')

@section('content')

    {{ $some_variable }}

    <form class="row g-3" action="{{ route('inform') }}" method="POST">

        @csrf

        <div class="col-md-12">
            <label for="name" class="form-label">ФИО</label>
            <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" id="name" value="{{ old('name') }}" {{-- required --}}>
            @error('name')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>

        <div class="col-md-12">
            <label for="department" class="form-label">State</label>
            <select name="department" class="form-select @error('department') is-invalid @enderror" id="department" {{-- required --}}>
                <option selected disabled value="">Выберите подразделение</option>
                <option value="2">КЯ02</option>
                <option value="3">КЯ03</option>
            </select>
            @error('department')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>

        <div class="col-md-12">
            <label for="message" class="form-label">Сообщение</label>
            <textarea name="message" class="form-control @error('message') is-invalid @enderror" id="message" placeholder="Required example textarea" {{-- required --}}>{{ old('message') }}</textarea>
            @error('message')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-warning">Отправить</button>
        </div>

    </form>

@endsection
