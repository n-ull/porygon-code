<div>
    <div {{ $attributes->merge(['class' => 'grid grid-cols-1 md:grid-cols-4 gap-3']) }}>
        @foreach ($drafts as $draft)
            <x-game-card :draft='$draft' />
        @endforeach
        {{ $slot }}
    </div>

    <div class="block my-2">
        {{ $drafts->links() }}
    </div>
</div>
