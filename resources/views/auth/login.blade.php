<x-layout>
    <x-header>Login</x-header>

    <div class="max-w-2xl mx-auto p-4 bg-slate-200 dark:bg-slate-900 rounded-lg">
        <form method="POST" action="{{ route('login.store') }}">
            @csrf

            {{-- email --}}
            <div class="mb-6">
                <label for="base-input"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                <input type="email" id="email-input" name="email" placeholder="treyshi@shidoon.com"
                    class="@error('name') border-red-500 @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 outline-none">
                @error('email')
                    <span class="text-red-500 text-xs my-2"> {{ $message }} </span>
                @enderror
            </div>

            {{-- password --}}
            <div class="mb-6">
                <label for="base-input"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                <input type="password" id="password-input" name="password" placeholder="Create a strong password"
                    class="@error('name') border-red-500 @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 outline-none">
                @error('password')
                    <span class="text-red-500 text-xs my-2"> {{ $message }} </span>
                @enderror
            </div>

            {{-- submit button --}}
            <div class="mb-6">
                <button type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Submit
                </button>
            </div>
        </form>
    </div>
</x-layout>
