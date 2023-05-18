{{-- Выбор подразделения Дискаунтера --}}
<div class="col-md-12">
    <label for="discounter_list" class="form-label"><small>Выберете код подразделения</small></label>
    <select name="discounter_list" class="form-select @error('discounter_list') is-invalid @enderror" id="discounter_list" required>
        @foreach ($discounter_list as $k => $v)
            <option value="{{ $v }}">{{ $v }}</option>
        @endforeach
    </select>
    @error('discounter_list')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
