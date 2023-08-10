<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('My Drafts') }}
        </h2>
    </x-slot>

    <div>
        <x-page-box>
            <x-draft-collection :drafts='$drafts'>
            @if (count($drafts) != 5)
                <div class="flex justify-center items-center border-4 rounded-lg border-dashed cursor-pointer">
                    <x-heroicon-o-plus class="text-center border-4 rounded-full md:h-16 text-gray-200" />
                </div>
            @endif
            </x-draft-collection>
        </x-page-box>
    </div>
</x-app-layout>
