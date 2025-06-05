<div>
    @if ($block['data']['tabs'] ?? false)
        @foreach ($block['data']['tabs'] as $key => $tab)
            @dd($tab, $key)
        @endforeach
    @endif
</div>