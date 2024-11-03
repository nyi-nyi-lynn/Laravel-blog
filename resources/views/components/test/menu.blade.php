@props([
    'color'=> 'blue'
])

<ol {{ $attributes->class(['bg-'.$color]) }}>
    {{ $slot }}
</ol>