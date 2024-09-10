@props(['status'])

@if ($status)
    <div {{ $attributes->merge(['class' => 'text-sm alert alert-success']) }}>
        {{ $status }}
    </div>
@endif
