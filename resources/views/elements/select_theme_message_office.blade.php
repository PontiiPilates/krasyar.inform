<div class="col-md-12">
    <label for="theme" class="form-label"><small>Выберете тему</small></label>
    <select name="theme" class="form-select @error('theme') is-invalid @enderror" id="theme" required>
        <option selected value="rudeness_employee">Хамство сотрудника</option>
        <option value="fraud_employee">Махинации сотрудника</option>
        <option value="gratitude_employee">Положительная обратная связь о работе сотрудника</option>
    </select>
    @error('theme')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>