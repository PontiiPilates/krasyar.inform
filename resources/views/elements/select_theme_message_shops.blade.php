<div class="col-md-12">
    <label for="theme" class="form-label"><small>Выберете тему</small></label>
    <select name="theme" class="form-select @error('theme') is-invalid @enderror" id="theme" required>
        <option value="1">Хамство ЛП / ЗДМ</option>
        <option value="2">Хамство директора магазина</option>
        <option value="3">Махинации ЛП / ЗДМ</option>
        <option value="4">Махинации директора магазина</option>
        <option value="5">Поблагодарить работу ЛП / ЗДМ</option>
        <option value="6">Поблагодарность работу директора магазина</option>
    </select>
    @error('theme')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>