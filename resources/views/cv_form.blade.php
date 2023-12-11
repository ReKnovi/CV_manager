 @php
    $user = auth()->user();
 @endphp
 <x-app-layout>
    {{-- <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head> --}}
    <head>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </head>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Add Cv') }}
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
                    <form method="POST" action="/store" class="mt-6 space-y-6">
                        @csrf
                
                        <div>
                           <label for="">Name</label>
                            <input style="color: black" id="" name="name" type="text" class="mt-1 block w-full">
                            <input style="color: black" value="{{$user->id}}" name="user_id" type="number" hidden>
                        </div>
                        <div>
                            <label for="">Email</label>
                            <x-text-input id="" name="email" type="email" class="mt-1 block w-full" autocomplete="name" />
                            
                        </div>
                        <div>
                            <label for="">Phone Number</label>
                            <x-text-input id="" name="phone" type="bigInteger" class="mt-1 block w-full" autocomplete="name" />
                            
                        </div>
                        <div>
                            <label for="">References</label>
                            <x-text-input id="" name="references" type="string" class="mt-1 block w-full" autocomplete="name" />
                            
                        </div>
                        <div>
                            <label for="">Technology</label>
                            <x-text-input id="" name="technology" type="string" class="mt-1 block w-full" autocomplete="name" />
                            
                        </div>
                        <div>
                            <label for="">Level</label>
                         <select style="color: black" class="mt-1 block w-full" name="level" id="">
                            <option value="Senior">Senior</option>
                            <option value="Mid">Mid</option>
                            <option value="Junior">Junior</option>
                         </select>
                            
                        </div>
                        <div>
                            <label for="">Salary Expectations</label>
                         <select style="color: black" class="mt-1 block w-full" name="salary_expectation" id="">
                            <option value="10000">10000</option>
                            <option value="15000">15000</option>
                         </select>
                        
                        </div>

                        <div>
                            <label for="">Experience</label>
                            <x-text-input id="" name="experience" type="string" class="mt-1 block w-full" autocomplete="name" />
                            
                        </div>

                        <div>

                            <a href="">
                                <button class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">Submit</button>
                            </a>
                        </div>
                    </form>    
                </div>
            </div>
        </div>
    </div>
   
        
    
   
    
</x-app-layout>
