<button {{ $attributes->class(['p-4','bg-red'])->merge(['type'=> 'button'])->merge(['type'=> 'button']) }}>
   @if ($slot->isEmpty())
       Button
   @else
        {{ $slot }}
   @endif
</button>