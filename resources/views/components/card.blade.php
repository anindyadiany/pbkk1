

@props(['highlight' => false])

<div {{ $attributes->class([
    'card',
    'highlight' => $highlight,
]) }}>
    {{ $slot }}
    <a {{ $attributes }} class="btn">View Details</a>
</div>
