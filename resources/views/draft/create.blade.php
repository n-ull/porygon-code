@php
    use App\Models\Category;
    $categories = Category::all();
@endphp

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Create Draft') }}
        </h2>
    </x-slot>

    @if (session()->has('success'))
        @dump(session()->get('success'))
    @endif

    <div>
        <x-page-box>
            <div class="block bg-white p-8 rounded-md">
                <x-validation-errors class="mb-4"></x-validation-errors>
                <form action="{{ route('draft.store') }}" method="POST">
                    @csrf
                    <h2 class="text-xl font-bold">Basic Info</h2>
                    <div class="flex flex-row space-x-4 mb-4">
                        <div class="flex w-1/3 border-2 items-center justify-center rounded-md p-2 border-dashed">
                            <div class="text-center text-gray-300">
                                <strong>Drag and Drop your thumbnail.</strong>
                                <p class="text-sm font-extralight">We accept PNG and JPEG</p>
                            </div>
                        </div>
                        <div class="grid w-full space-y-2">
                            <input name="title" type="text"
                                class="w-full border border-gray-300 rounded-md p-2 placeholder:text-gray-300"
                                placeholder="Pokémon Pruebas">
                            <textarea name="description" rows="4" class="w-full resize-none border border-gray-300 rounded-md p-2 placeholder:text-gray-300"
                                placeholder="Omega Simpsons es una niña de mi escuela..."></textarea>
                        </div>
                    </div>
                    <div class="flex mb-4">
                        <select name="category" id="category"
                            class="border-transparent rounded-l-md bg-purple-500 text-white">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}" class="bg-gray-300 text-black">
                                    {{ $category->category_name }}</option>
                            @endforeach
                        </select>
                        <select name="subcategory" id="subcategory"
                            class="border-transparent rounded-r-md bg-red-200 text-red-400">
                            <option value="1">Fire Red</option>
                        </select>
                    </div>

                    {{-- Details Editor --}}
                    <label for="editor">
                        <h2 class="text-xl font-bold">Details</h2>
                    </label>
                    <input name="v_title" type="text"
                        class="w-full border border-gray-300 rounded-md p-2 placeholder:text-gray-300 mb-2"
                        placeholder="First Post">
                    <textarea name="v_content" id="editor"></textarea>

                    <div class="flex w-full justify-end mt-4">
                        <button type="submit"
                            class="p-2.5 rounded-md bg-primary hover:bg-primary/70 transition-all text-white">Publish</button>
                    </div>
                </form>
            </div>
        </x-page-box>
    </div>
    @push('custom-scripts')
        <script type="text/javascript" src='https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js'></script>
        <script>
            tinymce.init({
                selector: "#editor"
            });
        </script>
    @endpush
</x-app-layout>
