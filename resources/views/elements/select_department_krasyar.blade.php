{{-- Выбор подразделения Красного Яра --}}
<div class="col-md-12">
    <label for="krasyar_list" class="form-label"><small>Выберете код подразделения</small></label>
    <select name="krasyar_list" class="form-select @error('krasyar_list') is-invalid @enderror" id="krasyar_list" required>
        @foreach ($krasyar_list as $k => $v)
            <option value="{{ $v }}">{{ $v }}</option>
        @endforeach
    </select>
    @error('krasyar_list')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
