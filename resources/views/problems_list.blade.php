@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Date</th>
                            <th scope="col">Device</th>
                            <th scope="col">Device Problems</th>
                            <th scope="col">In case of</th>
                            <th scope="col">Status</th>
                            <th scope="col">Authorities</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        @foreach ($problemslist as $problemslists)
                            <td>{{ $problemslists->created_at }}</td>
                            <td>{{ $problemslists->device }}</td>
                            <td>{{ $problemslists->device_problem }}</td>
                            <td>{{ $problemslists->case }}</td>
                            <td>{{ $problemslists->id }}</td>
                            <td>{{ $problemslists->id }}</td>
                            <td>@mdo</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
<!-- 
                <table border=1>
                    <tr>
                        <td>ID</td>
                        <td>Name</td>
                    </tr>
                    @foreach ($problemslist as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                    </tr>
                    @endforeach
                </table> -->
            </div>
        </div>
    </div>
</div>
@endsection