<div class="col-md-12">
    <label for="theme" class="form-label"><small>Выберете тему</small></label>
    <select name="theme" class="form-select @error('theme') is-invalid @enderror" id="theme" required>
        <option selected value="gratitude_staff">Поблагодарить за работу ЛП / ЗДМ</option>
        <option value="gratitude_director">Поблагодарность работу директора магазина</option>
        <option value="fraud_staff">Махинации ЛП / ЗДМ</option>
        <option value="fraud_director">Махинации директора магазина</option>
        <option value="rudeness_staff">Хамство ЛП / ЗДМ</option>
        <option value="rudeness_director">Хамство директора магазина</option>
    </select>
    @error('theme')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
