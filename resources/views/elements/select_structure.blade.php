{{-- Выбор структуры --}}
<div class="col-md-12">
    <label for="structure" class="form-label"><small>Выберете структуру</small></label>
    <select name="structure" class="form-select @error('structure') is-invalid @enderror" id="structure" required>
        <option selected value="office">Центральный офис</option>
        <option value="krasyar">Красный Яр</option>
        <option value="discounter">Батон</option>
    </select>
    @error('structure')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>