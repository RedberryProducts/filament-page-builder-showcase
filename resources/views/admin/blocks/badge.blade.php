<div>
    @if ($block['data'] ?? false)
        <x-filament::badge color="{{ $block['data']['color'] }}" size="{{ $block['data']['size'] }}">
            {!! $block['data']['content'] !!}
        </x-filament::badge>
    @endif
</div>
