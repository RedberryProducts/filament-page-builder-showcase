<div>
    @if ($block['data']['tabs'] ?? false)
        <x-filament::tabs label="{{ $block['data']['label'] ?? '' }}">
            @foreach ($block['data']['tabs'] as $key => $tab)
                <x-filament::tabs.item icon-position="{{ $tab['icon_position'] ?? 'before' }}"
                    icon="{{ $tab['icon'] ?? '' }}">
                    {{ $tab['title'] }}
                </x-filament::tabs.item>
            @endforeach
        </x-filament::tabs>
    @endif
</div>
