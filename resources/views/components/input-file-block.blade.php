<div class="mb-3">
    <label class="form-label text-capitalize">{{ $label ? $label : $name }}</label>
    <input type="file" class="form-control" name="{{ $name }}">
    <x-input-error :messages="$errors->get($name)" class="mt-2" />
</div>