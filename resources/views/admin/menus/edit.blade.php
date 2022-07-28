<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Menus') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex m-2 p-2">
                <a href="{{ route('admin.menus.index') }}"
                    class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg">Menu Index</a>
            </div>
            <div class="m-2 p-2 bg-slate-100 rounded">
                <form method="POST" enctype="multipart/form-data" action="{{ route('admin.menus.update', $menu) }}">
                    @method('PUT')
                    @csrf
                    <div class="mb-6">
                        <label for="name" class="mb-2 block text-sm font-medium text-gray-900 dark:text-gray-300">
                            Name</label>
                        <input type="text" name="name" id="name" value="{{ $menu->name }}"
                            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                            required />
                    </div>
                    <div class="mb-6">
                        <img src="{{ Storage::url($menu->image) }}" id="image-preview" alt="">
                        <label for="image"
                            class="mb-2 block text-sm font-medium text-gray-900 dark:text-gray-300">Image</label>
                        <input type="file" id="image" name="image" onchange="readURL(this)" value=""
                            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                            />
                    </div>
                    <div class="mb-6">
                        <label for="price"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Price</label>
                        <input type="number" max="10000.00" min=".01" step=".01" name="price" id="price"
                            value="{{ $menu->price }}"
                            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                            required />
                    </div>
                    <div class="mb-6">
                        <label for="description"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Description</label>
                        <textarea name="description" rows="4"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white 
                            dark:focus:ring-blue-500 dark:focus:border-blue-500">{{ $menu->description }}</textarea>
                    </div>
                    <div class="mb-6">
                        <label for="categories"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Categories</label>
                        @foreach ($categories as $category)
                            <div>
                                <input type="checkbox" name="categories[]" value="{{ $category->id }}"
                                    @checked($menu->categories->contains($category))> {{ $category->name }}
                            </div>
                        @endforeach
                    </div>
                    <button type="submit"
                        class="w-full rounded-lg bg-blue-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 sm:w-auto">Store</button>
                </form>

            </div>
        </div>
    </div>
</x-admin-layout>
