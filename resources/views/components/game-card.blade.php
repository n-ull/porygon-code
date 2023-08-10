<div class="flex flex-col bg-white dark:bg-gray-800 shadow-lg rounded-lg overflow-hidden hover:bg-gray-50 transition">
    @if ($draft->is_published && request()->routeIs('draft.index'))
        <div class="relative">
            <div class="absolute w-full px-4 py-2 text-green-800 bg-green-400 text-xs opacity-90">Published</div>
        </div>
    @endif

    <a href="{{ route('draft.show', ['draft' => $draft]) }}">
        <img src="https://i.imgur.com/or9YGZx.png" class="w-full h-50 object-cover flex-shrink-0" />
    </a>

    <div class="flex flex-col p-4 flex-grow">
        <a href="{{ route('draft.show', ['draft' => $draft]) }}">
            <h2 class="text-xl font-semibold">{{ $draft->title }}</h2>
        </a>
        <p class="text-gray-500 mt-2 line-clamp-3">{{ $draft->description }}</p>
    </div>

    <div class="flex items-end p-4">
        <span class="text-xs border rounded-full p-2 h-fit w-fit mt-1">{{ $draft->category->category_name }}</span>
    </div>

    <hr class="dark:border-gray-900">

    <div class="flex items-end justify-between p-4 mt-auto">
        <div class="flex gap-1 cursor-pointer">
            <x-heroicon-o-chat-bubble-oval-left-ellipsis class="h-6 w-6" />
            <p>0</p>
        </div>
        <div>
            <x-heroicon-s-share class="h-6 w-6" />
        </div>
    </div>
</div>
