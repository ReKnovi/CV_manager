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
