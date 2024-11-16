<div class="mb-3">
    <div class="form-label">{{ $label }}</div>
    <label class="form-check form-switch">
        <input name="{{ $name }}" class="form-check-input" value="1" type="checkbox"
            @checked($checked)>
        <span class="form-check-label"></span>
    </label>
    <x-input-error :messages="$errors->get($name)" class="mt-2" />
</div>
