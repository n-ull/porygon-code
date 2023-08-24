<x-app-layout>
    @php
        $wall1 = 'https://e0.pxfuel.com/wallpapers/183/707/desktop-wallpaper-pokemon-pc-pikachu.jpg';
        $wall2 = 'https://wallpaperaccess.com/full/8611.jpg';
    @endphp

    @if ($draft->is_published)
        <div class="max-w bg-green-100 py-2 px-8 text-green-500">Published</div>
    @endif

    <div class="mx-auto max-w-7xl">
        <div
            class="flex relative bg-[url('https://wallpaperaccess.com/full/8611.jpg')] h-48 items-center justify-center">
            <div class="absolute bg-gradient-to-t from-black/75 to-transparent h-full w-full"></div>
            <div class="text-xl font-semibold text-white drop-shadow-md">
                {{ $draft->title }}
            </div>
        </div>
        <div class="p-4 bg-white h-full">
            @markdown($draft->anchored_version->content)
        </div>
    </div>

</x-app-layout>
