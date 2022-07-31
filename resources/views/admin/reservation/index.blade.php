<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Reservations') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-end m-2 p-2">
                <a href="{{ route('admin.reservations.create') }}" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg">New Reservation</a>
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="py-3 px-6">
                                First Name
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Last Name
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Email
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Phone
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Date
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Guest Number
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Table
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Actions
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($reservations as $reservation)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th scope="row"
                                    class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $reservation->first_name }}
                                </th>
                                <td class="py-4 px-6">
                                    {{ $reservation->last_name }}
                                </td>
                                <td class="py-4 px-6">
                                    {{ $reservation->email }}
                                </td>
                                <td class="py-4 px-6">
                                    {{ $reservation->tel_number }}
                                </td>
                                <td class="py-4 px-6">
                                    {{ $reservation->res_date }}
                                </td>
                                <td class="py-4 px-6">
                                    {{ $reservation->guest_number }}
                                </td>
                                <td class="py-4 px-6">
                                    {{ $reservation->table->name }}
                                </td>
                                <td class="py-4 px-6">
                                    <div class="flex space-x-2">
                                        <a href="{{ route('admin.reservations.edit', $reservation->id) }}"
                                            class="bg-green-500 hover:bg-green-700 rounded-lg text-white px-4 py-2">Edit</a>
                                        <form class="bg-red-500 hover:bg-red-700 text-white px-4 py-2"
                                            action="{{ route('admin.reservations.destroy', $reservation->id) }}"
                                            onsubmit="return confirm('Are you sure ?')" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="rounded-lg">Delete</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-admin-layout>
