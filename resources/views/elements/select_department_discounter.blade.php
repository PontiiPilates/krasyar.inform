{{-- Выбор подразделения Дискаунтера --}}
<div class="col-md-12">
    <label for="discounter" class="form-label"><small>Выберете код подразделения</small></label>
    <select name="discounter" class="form-select @error('discounter') is-invalid @enderror" id="discounter" required>
        @foreach ($discounter_list as $k => $v)
            <option value="{{ $k }}">{{ $v }}</option>
        @endforeach
    </select>
    @error('discounter')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
