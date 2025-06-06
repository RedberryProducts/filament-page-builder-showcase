@if ($block['data'] ?? false)
    @foreach ($block['data']['checkboxes'] as $checkbox)
        <label class="flex items-center justify-start gap-x-2">
            <x-filament::input.checkbox />

            <span>
                {{ $checkbox['label'] ?? false }}
            </span>
        </label>
    @endforeach
@endif
