<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot>


    <!-- Page Content -->
    <x-page-box>
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Impedit tenetur, vitae modi quas non repellendus eos
        harum. Reiciendis commodi nostrum iusto iure eveniet sint illo, voluptas, molestias soluta perferendis sed?
        <div class="my-8">
            <x-draft-collection :drafts='$drafts' />
        </div>
    </x-page-box>

</x-app-layout>
