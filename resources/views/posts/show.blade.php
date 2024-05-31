<x-layout>
    <x-header>Posts Show Page</x-header>

    <a href="#"
        class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
        <div class="flex flex-col justify-between p-4 leading-normal">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"> {{ $post->title }} </h5>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"> {{ $post->content }} </p>
        </div>
    </a>
</x-layout>
