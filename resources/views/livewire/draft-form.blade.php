<div>
    {{-- Stepper --}}
    <ol class="items-center mb-8 w-full space-y-4 sm:flex sm:space-x-8 sm:space-y-0">
        <li class="flex items-center text-blue-600 dark:text-blue-500 space-x-2.5">
            <span
                class="flex items-center justify-center w-8 h-8 border border-blue-600 rounded-full shrink-0 dark:border-blue-500">
                1
            </span>
            <span>
                <h3 class="font-medium leading-tight">Basic info</h3>
                <p class="text-sm">Some information of your game.</p>
            </span>
        </li>
        <li class="flex items-center text-gray-500 dark:text-gray-400 space-x-2.5">
            <span
                class="flex items-center justify-center w-8 h-8 border border-gray-500 rounded-full shrink-0 dark:border-gray-400">
                2
            </span>
            <span>
                <h3 class="font-medium leading-tight">First version</h3>
                <p class="text-sm">Tell me about the content.</p>
            </span>
        </li>
        <li class="flex items-center text-gray-500 dark:text-gray-400 space-x-2.5">
            <span
                class="flex items-center justify-center w-8 h-8 border border-gray-500 rounded-full shrink-0 dark:border-gray-400">
                3
            </span>
            <span>
                <h3 class="font-medium leading-tight">Publish!</h3>
                <p class="text-sm">Omega es un maricon</p>
            </span>
        </li>
    </ol>


    <form action="POST">

        {{-- Step 1: Basic Info --}}
        @if ($currentStep == 1)
            <div id="step-one" class="block bg-white rounded-md shadow-sm p-8">
                <div class="grid grid-cols-2 gap-4">
                    <div
                        class="flex col-span-1 justify-center items-center border-2 border-dashed border-gray-200 rounded-md">
                        <label for="dropzone-file" class="text-gray-300 text-center">
                            <strong>Drag and drop your thumbnail</strong>
                            <br>
                            <span class="font-extralight text-sm">
                                PNG or JPG
                            </span>
                            <input id="dropzone-file" type="file" class="hidden" />

                        </label>
                    </div>
                    <div class="block">
                        <input type="text" name="title" id="title" wire:model="title"
                            class="w-full my-2 rounded-lg border-gray-200 placeholder:text-gray-200"
                            placeholder="Pokemon Rapidos y Furiosos 8">
                        <x-input-error for="title" />
                        <textarea name="description" id="description" cols="30" rows="10" wire:model="description"
                            class="w-full my-2 rounded-lg border-gray-200 placeholder:text-gray-200 resize-none" placeholder="Description"></textarea>
                        <x-input-error for="description" />
                    </div>
                    <div>
                        <input type="radio" name="category" id="gba" />
                        <label for="gba">GBA</label><br>
                        <input type="radio" name="category" id="rpg" />
                        <label for="rpg">RPG Maker</label>
                    </div>
                </div>
            </div>
        @endif

        {{-- Step 2: First Version --}}
        @if ($currentStep == 2)
            <div id="step-one" class="block bg-white rounded-md shadow-sm p-4">
                <div id="content"></div>
                {{-- <textarea name="content" id="content" cols="30" rows="10" wire:model="description"
                    class="w-full rounded-lg border-gray-200 placeholder:text-gray-200 resize-none" placeholder="Description"></textarea> --}}
            </div>
        @endif

        <div class="grid grid-cols-2">
            <br>
            <div class="flex grid-cols-4 my-4 justify-between">
                <div></div>
                <button class="bg-primary px-4 py-2 text-white rounded-lg" type="button"
                    wire:click="decreaseStep()">Back</button>
                <button class="bg-primary px-4 py-2 text-white rounded-lg" type="button"
                    wire:click="increaseStep()">Next</button>
                <button class="bg-primary px-4 py-2 text-white rounded-lg" type="submit">Submit</button>
            </div>
        </div>
    </form>
</div>
