<div>
    @if ($block['data']['items'] ?? false)
        @component('filament::components.breadcrumbs', [
            'breadcrumbs' => $block['data']['items'],
        ])
        @endcomponent
    @endif
</div>
