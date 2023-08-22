<x-app-layout>
<div class="block">
    <div class="max-w-7xl mx-auto py-10 sm:px-2 lg:px-4 bg-no-repeat bg-cover bg-[url('{{$user->banner_url}}')]">
        <div class="flex items-center gap-4 bg-black/60 rounded-lg p-4">
            <a href="{{route('public-profile.show', $user)}}"><img src="{{$user->profile_photo_url}}" class="rounded-full"></a>
            <div class="text-white">
                <a href="{{route('public-profile.show', $user)}}" class="hover:underline"><strong>{{$user->name}}</strong></a>
                <br>
                <span>Webmaster</span>
            </div>
        </div>
    </div>
    <x-page-box class="bg-white h-screen">
        <x-draft-collection :drafts="$user->drafts->where('is_published', true)"/>
    </x-page-box>
</div>
</x-app-layout>
