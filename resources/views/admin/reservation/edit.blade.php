<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Reservations') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex m-2 p-2">
                <a href="{{ route('admin.reservations.index') }}"
                    class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg">Reservation Index</a>
            </div>
            <div class="m-2 p-2 bg-slate-100 rounded">
                <form method="POST" action="{{ route('admin.reservations.update',$reservation) }}">
                    @method('PUT')
                    @csrf
                    <div class="grid gap-6 mb-6 md:grid-cols-2">
                        <div class="p-2 m-2">
                            <label for="first_name"
                                class="mb-2 block text-sm font-medium text-gray-900 dark:text-gray-300">
                                First Name</label>
                            <input type="text" name="first_name" id="first_name" value="{{ old('first_name')??$reservation->first_name }}"
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                required />
                        </div>
                        <div class="p-2 m-2">
                            <label for="last_name"
                                class="mb-2 block text-sm font-medium text-gray-900 dark:text-gray-300">
                                Last Name</label>
                            <input type="text" name="last_name" id="last_name" value="{{ old('last_name')??$reservation->last_name }}"
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                required />
                        </div>
                    </div>
                    <div class="m-2 p-2">
                        <label for="email" class="mb-2 block text-sm font-medium text-gray-900 dark:text-gray-300">
                            Email</label>
                        <input type="email" name="email" id="email" value="{{ old('email')??$reservation->email }}"
                            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500 @error('email') rounded-red-400 @enderror"
                            required />
                        @error('email')
                            <div class="text-small text-red-400">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="m-2 p-2">
                        <label for="tel_number" class="mb-2 block text-sm font-medium text-gray-900 dark:text-gray-300">
                            Phone Number</label>
                        <input type="text" name="tel_number" id="tel_number" value="{{ old('tel_number')??$reservation->tel_number }}"
                            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                            required />
                    </div>
                    <div class="m-2 p-2">
                        <label for="res_date" class="mb-2 block text-sm font-medium text-gray-900 dark:text-gray-300">
                            Reservation Date</label>
                        <input type="datetime-local" name="res_date" id="res_date" value="{{ old('res_date')??$reservation->res_date }}"
                            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500 @error('email') rounded-red-400 @enderror"
                            required />
                        @error('res_date')
                            <div class="text-small text-red-400">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="m-2 p-2">
                        <label for="guest_number"
                            class="mb-2 block text-sm font-medium text-gray-900 dark:text-gray-300">
                            Guest Number</label>
                        <input type="text" name="guest_number" id="guest_number" value="{{ old('guest_number')??$reservation->guest_number }}"
                            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                            required />
                    </div>
                    <div class="m-2 p-2">
                        <label for="table_id" class="mb-2 block text-sm font-medium text-gray-900 dark:text-gray-300">
                            Table</label>
                        <select name="table_id" id="table_id"
                            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500">
                            @foreach ($tables as $table)
                                <option value="{{ $table->id }}" @selected($reservation->table_id == $table->id)>{{ $table->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit"
                        class="w-full rounded-lg bg-blue-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 sm:w-auto">Store</button>
                </form>
            </div>
        </div>
    </div>
</x-admin-layout>
