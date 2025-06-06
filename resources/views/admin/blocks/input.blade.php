@if ($block['data'] ?? false)
    @component('filament-forms::components.field-wrapper.label')
        {{ $block['data']['label'] }}
    @endcomponent
    <x-filament::input.wrapper>
        <x-filament::input type="{{ $block['data']['type'] ?? 'text' }}" />
    </x-filament::input.wrapper>
@endif
