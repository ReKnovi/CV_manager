<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <div class="container mx-auto my-8 p-8 bg-white rounded shadow">
        <h2 class="text-3xl mb-4">All CVs</h2>
        <table class="min-w-full border border-gray-300">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b">Submitted CVS-Name</th>
                    <!-- Add more columns as needed -->
                </tr>
            </thead>
            <tbody>
                @forelse($cvs as $cv)
                <tr>
                    <td class="py-2 px-4 border-b">
                        <a href="{{ route('admin.individual_cv', ['id' => $cv->id]) }}" class="text-blue-500 hover:underline">{{ $cv->name }}</a>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="8" class="py-4 px-4 border-b">No CVs found.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</x-app-layout>
