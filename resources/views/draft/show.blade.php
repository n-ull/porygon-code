<x-app-layout>
    @if ($draft->is_published)
        <div class="max-w bg-green-100 py-2 px-8 text-green-500">Published</div>
    @endif
    <x-page-box>
        <div>{{ $draft->title }}</div>
    </x-page-box>
</x-app-layout>
