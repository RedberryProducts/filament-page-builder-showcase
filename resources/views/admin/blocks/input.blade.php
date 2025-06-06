@if ($block['data'] ?? false)
    <x-filament::input.wrapper>
        @component('filament-forms::components.field-wrapper.label')
            alohaaa
        @endcomponent
        {{-- <x-filament::input type="{{ $block['data']['type'] ?? 'text' }}" /> --}}
    </x-filament::input.wrapper>
@endif
