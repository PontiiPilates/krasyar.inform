{{-- Сообщение --}}
<div class="col-md-12">
    <label for="message" class="form-label"><small>Введите сообщение</small></label>
    <textarea name="message" class="form-control @error('message') is-invalid @enderror" id="message" placeholder="Расскажите о ситуации ..." required>{{ old('message') }}</textarea>
    @error('message')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>