<x-app-layout>
    <head>
        <style>
            h2 {
                text-align: center;
                font-size: 40px;
                font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
                margin-bottom: 20px; 
            }
            .container {    
                max-width: 800px;
                margin: 0 auto;
                padding: 50px;
                background-color: #fff;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                border-radius: 8px;
            }

            h1 {
                color: #333;
                text-align: center;
                font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;   
                margin-bottom: 20px; 
            }

            .admin-links a {
                display: block;
                margin-top: 20px;
                padding: 10px 20px;
                background-color: #007bff;
                color: #fff;
                text-decoration: none;
                border-radius: 4px;
                transition: background-color 0.3s;
            }

            a {
                text-align: center;
            }

            .admin-links a:hover {
                background-color: #0056b3;
            }

            .search-container {
                text-align: right;
                margin-bottom: 0px;
                
            }

            .search-bar {
                width: 300px;
                padding: 10px;
            }
        </style>
    </head>

    <div class="container">
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200">
                {{ __('Admin Dashboard') }}
            </h2>
            <div class="search-container">
                <form action="{{ route('admin.search_cvs') }}" method="post">
                    @csrf
                    <input type="text" name="search" class="search-bar" placeholder="Search by name">
                    <button type="submit">Search</button>
                </form>
            </div>
        </x-slot>

        <div class="admin-links">
            <h1>Welcome to the Admin Dashboard</h1>
            <a href="{{ route('admin.view_all_cvs') }}">View All CVS</a>
        </div>
    </div>
</x-app-layout>
