<!-- resources/views/admin/individualcv.blade.php -->

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Individual CV') }}
        </h2>
    </x-slot>
    
    <style>
        .cv-container {
            margin-top: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 0;
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        td {
            background-color: #fff;
        }

        p {
            margin-top: 10px;
        }

        .status-dropdown {
            margin-top: 10px;
        }

        /* Additional style to align the dropdown with the rest of the content */
        .status-dropdown label,
        .status-dropdown select {
            display: inline-block;
            vertical-align: top;
        }
    </style>

    <div>
        {{-- <h2>{{ $user->name }}'s CV</h2> --}}
        @if ($cv)
            <div class="cv-container">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Technology</th>
                            <th>Level</th>
                            <th>Salary Expectation</th>
                            <th>Experience</th>
                            <!-- Add a new table header for the status dropdown -->
                            <th>Application Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $cv->email }}</td>
                            <td>{{ $cv->phone }}</td>
                            <td>{{ $cv->technology }}</td>
                            <td>{{ $cv->level }}</td>
                            <td>{{ $cv->salary_expectation }}</td>
                            <td>{{ $cv->experience }}</td>
                            <!-- Add a new table data for the status dropdown -->
                            <td class="status-dropdown">
                                <label for="status">Application Status:</label>
                                <select id="status" name="status">
                                    <option value="submitted">Submitted</option>
                                    <option value="shortlisted">Shortlisted</option>
                                    <option value="1interview">1 Interview Done</option>
                                    <option value="2interview">2nd Interview Done</option>
                                    <option value="hired">Hired</option>
                                    <option value="rejected">Rejected</option>
                                    <option value="blacklisted">Blacklisted</option>
                                </select>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        @else
            <p>No CV found for {{ $user->name }}.</p>
        @endif
    </div>
</x-app-layout>
