<div>
    @if ($block['data']['src'] ?? false)
        <x-filament::avatar
            src="{{ $block['data']['src'] }}"
            alt="{{ $block['data']['alt'] ?? '' }}"
            size="{{ $block['data']['size'] ?? 'w-20' }}"
            :circular="$block['data']['circular'] ?? false" />
    @endif
</div>
