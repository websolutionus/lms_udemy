<div class="mb-3">
    <label class="form-label">{{ $label ? $label : $name }}</label>
    <input type="text" class="form-control" name="{{ $name }}"
        placeholder="{{ $placeholder }}">
    <x-input-error :messages="$errors->get($name)" class="mt-2" />
</div>