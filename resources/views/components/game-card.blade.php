@php
    $can_edit = request()->routeIs('draft.index') && $draft->user_id === auth()->user()->id;
@endphp

<div class="flex flex-col bg-white dark:bg-gray-800 shadow-lg rounded-md overflow-hidden hover:bg-gray-50 transition">
    @if (request()->routeIs('draft.index'))
        <div class="relative">
            <div class="absolute left-0 cursor-default top-0 m-4 z-10 rounded-md {{$draft->is_published ? 'bg-green-500' : 'bg-red-500'}} p-1.5 text-xs">
                {{$draft->is_published ? 'Published' : 'Unpublished'}}
            </div>
        </div>
    @endif

    @if ($can_edit)
        <div class="relative">
            <div class="absolute right-0 top-0 m-4 z-10 cursor-pointer">
                <x-heroicon-s-pencil-square class="text-white drop-shadow-lg hover:text-gray-200 transition" />
            </div>
        </div>
    @endif

    <a href="{{ route('draft.show', ['draft' => $draft]) }}">
        <div class="relative">
            <div class="absolute w-full h-full bg-gradient-to-b from-black/50 to-transparent z-0"></div>
            <img src="https://i.imgur.com/or9YGZx.png" class="w-full h-50 object-cover rounded-t-md" />
        </div>
    </a>

    <div class="flex flex-col p-4 flex-grow">
        <a href="{{ route('draft.show', ['draft' => $draft]) }}">
            <h2 class="text-xl font-semibold">{{ $draft->title }}</h2>
        </a>
        <p class="text-gray-500 mt-2 line-clamp-3">{{ $draft->description }}</p>
        <span class="text-xs border rounded-full p-2 h-fit w-fit mt-1">{{ $draft->category->category_name }}</span>
    </div>

    {{-- <div class="flex items-end p-4">
        <span class="text-xs border rounded-full p-2 h-fit w-fit mt-1">{{ $draft->category->category_name }}</span>
    </div> --}}

    <hr class="dark:border-gray-900">

    <div class="flex items-end justify-between p-4 mt-auto">
        <div class="flex gap-1 cursor-pointer">
            <x-heroicon-o-chat-bubble-oval-left-ellipsis />
            <p>0</p>
        </div>
        <div>
            <x-heroicon-s-share />
        </div>
    </div>
</div>
