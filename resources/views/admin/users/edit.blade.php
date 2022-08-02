<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Users') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex m-2 p-2">
                <a href="{{ route('admin.users.index') }}"
                    class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg">Table Index</a>
            </div>
            <div class="m-2 p-2 bg-slate-100 rounded">
                <form method="POST" action="{{ route('admin.users.update',$user) }}">
                    @csrf
                    @method('PUT')
                    <div class="mb-6">
                        <div class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500">
                            {{ $user->name }}
                        </div>
                        
                    </div>
                    <div class="mb-6">
                        <label for="is_admin"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Admin Status</label>
                            <input type="checkbox" id="is_admin" name="is_admin" @checked($user->is_admin) value="1"
                            class="block rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                            />
                    </div>
                    <button type="submit"
                        class="w-full rounded-lg bg-blue-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 sm:w-auto">Update</button>
                </form>

            </div>
        </div>
    </div>
</x-admin-layout>
