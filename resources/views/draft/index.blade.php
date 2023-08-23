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
                    <a href="{{route('draft.create')}}">
                        <div
                            class="flex flex-col border-4 border-dashed rounded-md items-center justify-center h-full min-h-[460px] scale-95 cursor-pointer hover:bg-gray-200/20 transition-colors">
                            <x-heroicon-o-plus-circle class="text-center rounded-full w-20 h-20 text-gray-200" />
                        </div>
                    </a>
                @endif
            </x-draft-collection>
        </x-page-box>
    </div>
</x-app-layout>
