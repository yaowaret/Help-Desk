@extends('layouts.app')

@section('content')

<div class="container">


    <!-- Latest compiled and minified CSS -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-confirmation/1.0.5/bootstrap-confirmation.min.js"></script> -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- @if (session('massage'))
    <div class="alert alert-success">{{ session::get('massage')}}
    </div>
    @endif -->

    <p> <b>Name: </b> {{ Auth::user()->name }} <b>Position: </b> {{ Auth::user()->position }} <b>Location: </b>
        {{ Auth::user()->location }}
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
                                <td> <a href="/delete/{{$problemslists->id }}"
                                        onclick="return confirm('Are you sure to delete?')"
                                        class="btn btn-outline-info">Delete</a> </td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</div>
@endsection