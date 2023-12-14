
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit CV') }}
        </h2>
    </x-slot>

    <div>
        <form method="post" action="{{ route('my_cv.update', ['id' => $cv->id]) }}">
            @csrf
            @method('patch')
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="{{ $cv->name }}">
            <label for="name">Email:</label>
            <input type="text" id="email" name="email" value="{{ $cv->email }}">
            <button type="submit">Update CV</button>
            <label for="name">Phone:</label>
            <input type="integer" id="phone" name="phone" value="{{ $cv->phone }}">
        </form>
    </div>
</x-app-layout>
