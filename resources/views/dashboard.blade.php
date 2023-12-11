@php
    use App\Models\Cv;

    $user = auth()->user();
    $data = CV::where('user_id', $user->id)->first();
@endphp
<x-app-layout>
    <head>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </head>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
<div class="py-12">
    <form action="{{ route('search.cvs') }}" method="post">
        @csrf
        <label for="query">Search:</label>
        <input type="text" name="query" id="query" value="{{ old('query') }}" placeholder="Name, Technology, Interview Status">
        <button class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150" type="submit">Search</button>
    </form>
    
    <!-- Display search results -->
    @if(isset($cvs))
        <ul>
            @foreach($cvs as $cv)
                <li>{{ $cv->name }} - {{ $cv->technology }} - {{ $cv->interview_status }}</li>
            @endforeach
        </ul>
    @endif
</div>
<div>
    @if(session('error'))
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: '{{ session('error') }}',
        });
    </script>
    @elseif(session('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Success',
            text: '{{ session('success') }}',
        });
    </script>
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
      </div>
@endif

</div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                    
                </div>
            </div>
        </div>
    </div>
    <div >
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                   @if(is_null($data))
                    <a href="add-cv">
                    <x-primary-button >{{ __('Add CV') }}</x-primary-button>
                    </a>
                    @endif
                    <a href="/view-my-cv/{{$user->id}}">
                    <x-primary-button class="mx-auto">{{ __('View My CV') }}</x-primary-button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
