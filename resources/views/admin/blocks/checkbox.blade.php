@if ($block['data'] ?? false)
    <label class="flex items-center justify-start gap-x-2">
        <x-filament::input.checkbox />

        <span>
            {{ $block['data']['label'] ?? false }}
        </span>
    </label>
@endif
