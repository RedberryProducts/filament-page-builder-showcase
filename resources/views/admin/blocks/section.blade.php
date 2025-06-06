<x-filament::section collapsible="{{ $block['data']['collapsible'] ?? null }}">
    <x-slot name="heading">
        {{ $block['data']['heading'] ?? '' }}
    </x-slot>

    <x-slot name="description">
        {!! $block['data']['description']  ?? '' !!}
    </x-slot>
    {!! $block['data']['content'] ?? '' !!}

</x-filament::section>
