<div>
@extends('layouts.app') <!-- You may need to create an admin layout -->

@section('content')
    <h2>All CVs</h2>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <!-- Add more columns as needed -->
            </tr>
        </thead>
        <tbody>
            @foreach($cvs as $cv)
                <tr>
                    <td>{{ $cv->name }}</td>
                    <td>{{ $cv->email }}</td>
                    <!-- Add more columns as needed -->
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

</div>
